
<
?
p
h
p

/
*
*

*
 
J
o
m
r
e
s
 
C
M
S
 
A
g
n
o
s
t
i
c
 
P
l
u
g
i
n
.

*

*
 
@
a
u
t
h
o
r
 
W
o
o
l
l
y
i
n
w
a
l
e
s
 
I
T
 
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
D
i
r
e
c
t
 
A
c
c
e
s
s
 
t
o
 
t
h
i
s
 
f
i
l
e
 
i
s
 
n
o
t
 
a
l
l
o
w
e
d
.
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


c
l
a
s
s
 
j
0
2
9
9
0
a
d
d
_
t
o
u
r
i
s
t
_
t
a
x

{

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
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
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
i
f
 
t
h
i
s
 
i
s
 
a
 
s
e
c
r
e
t
 
k
e
y
 
p
a
y
m
e
n
t
 
(
f
o
r
 
a
n
 
a
p
p
r
o
v
e
d
 
b
o
o
k
i
n
g
 
e
n
q
u
i
r
y
)
 
w
e
 
d
o
n
`
t
 
n
e
e
d
 
t
o
 
a
d
d
 
t
h
e
 
t
o
u
r
i
s
t
 
t
a
x
 
a
g
a
i
n

	
	
$
s
k
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
s
k
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
s
k
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
o
u
r
i
s
t
_
t
a
x
 
=
 
0
.
0
0
;


 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
'
t
o
u
r
i
s
t
_
t
a
x
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
'
t
o
u
r
i
s
t
_
t
a
x
'
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
'
t
o
u
r
i
s
t
_
t
a
x
_
i
s
p
e
r
c
e
n
t
a
g
e
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
'
t
o
u
r
i
s
t
_
t
a
x
_
i
s
p
e
r
c
e
n
t
a
g
e
'
]
 
=
 
'
1
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
'
t
o
u
r
i
s
t
_
t
a
x
_
w
h
o
l
e
b
o
o
k
i
n
g
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
'
t
o
u
r
i
s
t
_
t
a
x
_
w
h
o
l
e
b
o
o
k
i
n
g
'
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
'
t
o
u
r
i
s
t
_
t
a
x
'
]
 
=
 
(
f
l
o
a
t
)
 
$
m
r
C
o
n
f
i
g
[
'
t
o
u
r
i
s
t
_
t
a
x
'
]
;


 
 
 
 
 
 
 
 
$
b
k
g
 
=
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
0
5
0
0
0
'
)
;
 
/
/
 
C
r
e
a
t
e
 
t
h
e
 
b
o
o
k
i
n
g
 
o
b
j
e
c
t


 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
e
m
o
v
e
_
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
(
'
t
o
u
r
i
s
t
_
t
a
x
'
,
 
0
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
'
t
o
u
r
i
s
t
_
t
a
x
_
i
s
p
e
r
c
e
n
t
a
g
e
'
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
'
t
o
u
r
i
s
t
_
t
a
x
_
w
h
o
l
e
b
o
o
k
i
n
g
'
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
c
o
s
t
 
=
 
$
b
k
g
-
>
r
o
o
m
_
t
o
t
a
l
 
+
 
$
b
k
g
-
>
e
x
t
r
a
s
v
a
l
u
e
 
+
 
$
b
k
g
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
c
o
s
t
 
=
 
$
b
k
g
-
>
r
o
o
m
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
u
r
i
s
t
_
t
a
x
 
=
 
(
$
b
a
s
e
_
c
o
s
t
 
/
 
1
0
0
)
 
*
 
$
m
r
C
o
n
f
i
g
[
'
t
o
u
r
i
s
t
_
t
a
x
'
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
u
r
i
s
t
_
t
a
x
 
=
 
$
m
r
C
o
n
f
i
g
[
'
t
o
u
r
i
s
t
_
t
a
x
'
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
t
o
u
r
i
s
t
_
t
a
x
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
a
d
d
_
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
(
'
t
o
u
r
i
s
t
_
t
a
x
'
,
 
0
,
 
j
r
_
g
e
t
t
e
x
t
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
T
O
U
R
I
S
T
_
T
A
X
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
T
O
U
R
I
S
T
_
T
A
X
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
,
 
$
t
o
u
r
i
s
t
_
t
a
x
,
 
0
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
e
n
e
r
a
t
e
B
i
l
l
i
n
g
(
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
t
o
r
e
B
o
o
k
i
n
g
D
e
t
a
i
l
s
(
)
;

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

