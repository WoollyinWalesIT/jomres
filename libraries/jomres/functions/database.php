
<
?
p
h
p

/
*
*

 
*
 
D
a
t
a
b
a
s
e
 
q
u
e
r
y
i
n
g
 
f
u
n
c
t
i
o
n
s

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


/
*
*

*

*
 
P
e
r
f
o
r
m
s
 
S
E
L
E
C
T
 
q
u
e
r
i
e
s

*

*
 
I
f
 
p
a
s
s
e
d
,
 
m
o
d
e
 
1
 
e
x
p
e
c
t
s
 
1
 
r
o
w
 
w
i
t
h
 
1
 
e
l
e
m
e
n
t
 
i
n
 
i
t
.
 
R
e
t
u
r
n
s
 
a
 
s
t
r
i
n
g
.
 
m
o
d
e
 
2
 
T
h
e
 
c
a
l
l
i
n
g
 
f
u
n
c
t
i
o
n
 
e
x
p
e
c
t
s
 
1
 
r
o
w
 
w
i
t
h
 
e
l
e
m
e
n
t
s
 
i
n
 
i
t
.
 
R
e
t
u
r
n
s
 
a
n
 
a
s
s
o
c
i
a
t
i
v
e
 
a
r
r
a
y

*

*
/

f
u
n
c
t
i
o
n
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
$
m
o
d
e
 
=
 
f
a
l
s
e
)

{

 
 
 
 
$
j
o
m
r
e
s
_
d
b
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
d
a
t
a
b
a
s
e
'
)
;

 
 
 
 
$
j
o
m
r
e
s
_
d
b
-
>
s
e
t
Q
u
e
r
y
(
$
q
u
e
r
y
)
;

 
 
 
 
$
j
o
m
r
e
s
_
d
b
-
>
l
o
a
d
O
b
j
e
c
t
L
i
s
t
(
)
;


 
 
 
 
$
n
u
m
 
=
 
c
o
u
n
t
(
$
j
o
m
r
e
s
_
d
b
-
>
r
e
s
u
l
t
)
;


 
 
 
 
s
w
i
t
c
h
 
(
$
m
o
d
e
)
 
{

 
 
 
 
 
 
 
 
c
a
s
e
 
1
:

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
M
o
d
e
 
1
.
 
T
h
e
 
c
a
l
l
i
n
g
 
f
u
n
c
t
i
o
n
 
e
x
p
e
c
t
s
 
1
 
r
o
w
 
w
i
t
h
 
1
 
e
l
e
m
e
n
t
 
i
n
 
i
t
.
 
R
e
t
u
r
n
s
 
a
 
s
t
r
i
n
g

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
n
u
m
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
j
o
m
r
e
s
_
d
b
-
>
r
e
s
u
l
t
[
0
]
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
c
a
s
e
 
2
:

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
M
o
d
e
 
2
.
 
T
h
e
 
c
a
l
l
i
n
g
 
f
u
n
c
t
i
o
n
 
e
x
p
e
c
t
s
 
1
 
r
o
w
 
w
i
t
h
 
e
l
e
m
e
n
t
s
 
i
n
 
i
t
.
 
R
e
t
u
r
n
s
 
a
n
 
a
s
s
o
c
i
a
t
i
v
e
 
a
r
r
a
y

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
n
u
m
 
>
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
D
a
t
a
b
a
s
e
 
e
r
r
o
r
 
m
o
r
e
 
t
h
a
n
 
o
n
e
 
r
e
s
u
l
t
 
r
e
t
u
r
n
e
d
.
 
O
n
e
 
e
x
p
e
c
t
e
d
.
 
S
t
o
p
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
n
u
m
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
j
o
m
r
e
s
_
d
b
-
>
r
e
s
u
l
t
[
0
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
j
o
m
r
e
s
_
d
b
-
>
r
e
s
u
l
t
[
0
]
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
[
 
$
k
 
]
 
=
 
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
j
o
m
r
e
s
_
d
b
-
>
r
e
s
u
l
t
;

 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
}

}


/
*
*

*

*
 
P
e
r
f
o
r
m
s
 
I
N
S
E
R
T
/
U
P
D
A
T
E
/
D
E
L
E
T
E
 
q
u
e
r
i
e
s

*

*
 
C
a
l
l
e
d
 
d
o
I
n
s
e
r
t
S
q
l
,
 
t
h
e
 
t
i
t
l
e
 
i
s
 
n
o
t
 
q
u
i
t
e
 
c
o
r
r
e
c
t
 
a
s
 
t
h
i
s
 
f
u
n
c
t
i
o
n
 
a
l
s
o
 
h
a
n
d
l
e
s
 
u
p
d
a
t
e
s
 
a
n
d
 
d
e
l
e
t
e
s
.

*
 
W
e
'
l
l
 
u
s
e
 
t
h
e
 
l
a
c
k
 
o
f
 
t
e
x
t
 
i
n
 
$
o
p
 
a
s
 
a
 
w
a
y
 
o
f
 
i
n
d
i
c
a
t
i
n
g
 
t
h
a
t
 
w
e
 
d
o
n
'
t
 
w
a
n
t
 
t
h
i
s
 
o
p
e
r
a
t
i
o
n
 
l
o
g
g
e
d
.

*
 
T
h
i
s
 
w
a
y
 
w
e
 
c
a
n
 
c
a
l
l
 
t
h
e
 
a
u
d
i
t
 
d
i
r
e
c
t
l
y
 
f
r
o
m
 
t
h
e
 
i
n
s
e
r
t
 
i
n
t
e
r
n
e
t
 
b
o
o
k
i
n
g
 
f
u
n
c
t
i
o
n
 
r
a
t
h
e
r
 
t
h
a
n
 
l
o
g
g
i
n
g
 
E
V
E
R
Y
T
H
I
N
G
 
t
h
a
t
'
s
 
d
o
n
e
 
b
y
 
t
h
e
 
f
u
n
c
t
i
o
n

*

*
/

f
u
n
c
t
i
o
n
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
$
o
p
 
=
 
'
'
,
 
$
i
g
n
o
r
e
E
r
r
o
r
s
 
=
 
f
a
l
s
e
)

{

 
 
 
 
$
j
o
m
r
e
s
_
d
b
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
d
a
t
a
b
a
s
e
'
)
;

 
 
 
 
$
j
o
m
r
e
s
_
d
b
-
>
s
e
t
Q
u
e
r
y
(
$
q
u
e
r
y
)
;


 
 
 
 
i
f
 
(
!
$
j
o
m
r
e
s
_
d
b
-
>
q
u
e
r
y
(
)
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
$
i
g
n
o
r
e
E
r
r
o
r
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
D
o
 
i
n
s
e
r
t
 
f
a
i
l
e
d
 
:
:
 
'
.
$
j
o
m
r
e
s
_
d
b
-
>
e
r
r
o
r
.
'
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
I
D
 
=
 
$
j
o
m
r
e
s
_
d
b
-
>
l
a
s
t
_
i
d
;


 
 
 
 
 
 
 
 
i
f
 
(
$
o
p
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
a
u
d
i
t
(
$
q
u
e
r
y
,
 
$
o
p
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
I
D
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
I
D
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
d
o
D
B
C
l
o
s
e
(
)

{

 
 
 
 
$
j
o
m
r
e
s
_
d
b
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
d
a
t
a
b
a
s
e
'
)
;

 
 
 
 
$
j
o
m
r
e
s
_
d
b
-
>
c
l
o
s
e
(
)
;

}

