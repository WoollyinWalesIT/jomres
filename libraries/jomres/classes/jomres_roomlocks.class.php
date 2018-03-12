
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
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


c
l
a
s
s
 
j
o
m
r
e
s
_
r
o
o
m
l
o
c
k
s

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
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
p
r
o
p
e
r
t
y
_
u
i
d
'
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
s
s
i
o
n
_
d
i
r
e
c
t
o
r
y
 
=
 
J
O
M
R
E
S
_
S
E
S
S
I
O
N
S
_
A
B
S
P
A
T
H
;

 
 
 
 
 
 
 
 
$
l
o
c
k
_
f
i
l
e
n
a
m
e
 
=
 
'
r
o
o
m
_
l
o
c
k
_
'
.
(
i
n
t
)
 
$
p
r
o
p
e
r
t
y
_
u
i
d
.
'
.
p
h
p
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
s
s
i
o
n
f
i
l
e
 
=
 
$
t
h
i
s
-
>
s
e
s
s
i
o
n
_
d
i
r
e
c
t
o
r
y
.
$
l
o
c
k
_
f
i
l
e
n
a
m
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
l
e
a
n
_
u
p
_
o
l
d
_
l
o
c
k
s
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
e
t
_
a
l
l
_
r
o
o
m
s
_
a
l
r
e
a
d
y
_
i
n
_
c
a
r
t
(
)
;

 
 
 
 
}


 
 
 
 
/
/
 
I
f
 
t
h
e
 
l
o
c
k
 
i
s
 
a
n
 
h
o
u
r
 
o
l
d
,
 
w
e
'
l
l
 
r
e
m
o
v
e
 
t
h
e
 
l
o
c
k
.

 
 
 
 
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
 
c
l
e
a
n
_
u
p
_
o
l
d
_
l
o
c
k
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
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
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
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
j
r
C
o
n
f
i
g
[
 
'
r
o
o
m
_
l
o
c
k
_
t
i
m
e
o
u
t
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
 
'
r
o
o
m
_
l
o
c
k
_
t
i
m
e
o
u
t
'
 
]
 
=
 
3
6
0
0
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
n
o
w
 
=
 
s
t
r
t
o
t
i
m
e
(
'
n
o
w
'
)
;

 
 
 
 
 
 
 
 
$
d
a
t
e
s
_
a
r
r
a
y
 
=
 
$
t
h
i
s
-
>
i
n
i
t
_
l
o
c
k
f
i
l
e
(
)
;

 
 
 
 
 
 
 
 
$
a
l
l
_
s
e
s
s
i
o
n
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
d
a
t
e
s
_
a
r
r
a
y
 
a
s
 
$
s
e
s
s
 
=
>
 
$
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
_
s
e
s
s
i
o
n
s
[
 
]
 
=
 
$
s
e
s
s
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
d
a
t
e
s
_
a
r
r
a
y
)
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
d
a
t
e
s
_
a
r
r
a
y
 
a
s
 
$
s
e
s
s
_
i
d
 
=
>
 
$
s
e
s
s
i
o
n
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
s
e
s
s
i
o
n
 
a
s
 
$
d
a
t
e
 
=
>
 
$
r
o
o
m
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
r
o
o
m
 
a
s
 
$
r
o
o
m
_
u
i
d
 
=
>
 
$
t
i
m
e
s
t
a
m
p
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
$
n
o
w
 
-
 
$
t
i
m
e
s
t
a
m
p
)
 
>
 
(
i
n
t
)
 
$
j
r
C
o
n
f
i
g
[
 
'
r
o
o
m
_
l
o
c
k
_
t
i
m
e
o
u
t
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
d
a
t
e
s
_
a
r
r
a
y
[
 
$
s
e
s
s
_
i
d
 
]
[
 
$
d
a
t
e
 
]
[
 
$
r
o
o
m
_
u
i
d
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
a
v
e
_
l
o
c
k
f
i
l
e
_
d
a
t
a
(
$
d
a
t
e
s
_
a
r
r
a
y
)
;

 
 
 
 
}


 
 
 
 
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
 
l
o
c
k
_
r
o
o
m
(
$
r
o
o
m
_
u
i
d
,
 
$
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
o
o
m
_
u
i
d
 
=
 
$
t
h
i
s
-
>
e
x
t
r
a
c
t
_
r
o
o
m
_
u
i
d
(
$
r
o
o
m
_
u
i
d
)
;

 
 
 
 
 
 
 
 
$
d
a
t
e
s
_
a
r
r
a
y
 
=
 
$
t
h
i
s
-
>
i
n
i
t
_
l
o
c
k
f
i
l
e
(
)
;

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
s
e
s
s
i
o
n
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
j
o
m
r
e
s
s
e
s
s
i
o
n
'
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
d
a
t
e
s
_
a
r
r
a
y
[
 
$
j
o
m
r
e
s
s
e
s
s
i
o
n
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
s
_
a
r
r
a
y
[
 
$
j
o
m
r
e
s
s
e
s
s
i
o
n
 
]
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
)
;

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
a
s
 
$
d
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
s
_
a
r
r
a
y
[
 
$
j
o
m
r
e
s
s
e
s
s
i
o
n
 
]
[
 
$
d
a
t
e
 
]
[
 
$
r
o
o
m
_
u
i
d
 
]
 
=
 
s
t
r
t
o
t
i
m
e
(
'
n
o
w
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
a
v
e
_
l
o
c
k
f
i
l
e
_
d
a
t
a
(
$
d
a
t
e
s
_
a
r
r
a
y
)
;

 
 
 
 
}


 
 
 
 
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
 
u
n
l
o
c
k
_
r
o
o
m
(
$
r
o
o
m
_
u
i
d
,
 
$
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
o
o
m
_
u
i
d
 
=
 
$
t
h
i
s
-
>
e
x
t
r
a
c
t
_
r
o
o
m
_
u
i
d
(
$
r
o
o
m
_
u
i
d
)
;

 
 
 
 
 
 
 
 
$
d
a
t
e
s
_
a
r
r
a
y
 
=
 
$
t
h
i
s
-
>
i
n
i
t
_
l
o
c
k
f
i
l
e
(
)
;

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
s
e
s
s
i
o
n
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
;

 
 
 
 
 
 
 
 
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
)
;

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
a
s
 
$
d
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
d
a
t
e
s
_
a
r
r
a
y
[
 
$
j
o
m
r
e
s
s
e
s
s
i
o
n
 
]
[
 
$
d
a
t
e
 
]
[
 
$
r
o
o
m
_
u
i
d
 
]
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
a
v
e
_
l
o
c
k
f
i
l
e
_
d
a
t
a
(
$
d
a
t
e
s
_
a
r
r
a
y
)
;

 
 
 
 
}


 
 
 
 
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
 
i
s
_
r
o
o
m
_
l
o
c
k
e
d
(
$
r
o
o
m
_
u
i
d
,
 
$
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
o
o
m
_
u
i
d
 
=
 
$
t
h
i
s
-
>
e
x
t
r
a
c
t
_
r
o
o
m
_
u
i
d
(
$
r
o
o
m
_
u
i
d
)
;

 
 
 
 
 
 
 
 
$
d
a
t
e
s
_
a
r
r
a
y
 
=
 
$
t
h
i
s
-
>
i
n
i
t
_
l
o
c
k
f
i
l
e
(
)
;

 
 
 
 
 
 
 
 
$
a
l
l
_
s
e
s
s
i
o
n
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
d
a
t
e
s
_
a
r
r
a
y
 
a
s
 
$
s
e
s
s
 
=
>
 
$
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
_
s
e
s
s
i
o
n
s
[
 
]
 
=
 
$
s
e
s
s
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
s
e
s
s
i
o
n
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
;

 
 
 
 
 
 
 
 
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
d
a
t
e
R
a
n
g
e
A
r
r
a
y
)
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
d
a
t
e
R
a
n
g
e
A
r
r
a
y
 
a
s
 
$
d
a
t
e
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
a
l
l
_
s
e
s
s
i
o
n
s
 
a
s
 
$
s
e
s
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
d
a
t
e
s
_
a
r
r
a
y
[
 
$
s
e
s
s
 
]
[
 
$
d
a
t
e
 
]
[
 
$
r
o
o
m
_
u
i
d
 
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
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
o
o
m
s
_
a
l
r
e
a
d
y
_
i
n
_
c
a
r
t
 
a
s
 
$
c
a
r
t
_
d
a
t
e
_
k
e
y
 
=
>
 
$
c
a
r
t
_
d
a
t
e
_
r
o
o
m
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
a
r
t
_
d
a
t
e
_
k
e
y
 
=
=
 
$
d
a
t
e
 
&
&
 
i
n
_
a
r
r
a
y
(
$
r
o
o
m
_
u
i
d
,
 
$
c
a
r
t
_
d
a
t
e
_
r
o
o
m
s
)
)
 
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
 
u
n
l
o
c
k
_
a
l
l
_
r
o
o
m
s
_
f
o
r
_
s
e
s
s
i
o
n
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
d
a
t
e
s
_
a
r
r
a
y
 
=
 
$
t
h
i
s
-
>
i
n
i
t
_
l
o
c
k
f
i
l
e
(
)
;

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
s
e
s
s
i
o
n
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
;

 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
d
a
t
e
s
_
a
r
r
a
y
[
 
$
j
o
m
r
e
s
s
e
s
s
i
o
n
 
]
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
a
v
e
_
l
o
c
k
f
i
l
e
_
d
a
t
a
(
$
d
a
t
e
s
_
a
r
r
a
y
)
;

 
 
 
 
}


 
 
 
 
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
 
i
n
i
t
_
l
o
c
k
f
i
l
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
f
i
l
e
_
e
x
i
s
t
s
(
$
t
h
i
s
-
>
s
e
s
s
i
o
n
f
i
l
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
o
u
c
h
(
$
t
h
i
s
-
>
s
e
s
s
i
o
n
f
i
l
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
s
_
a
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
s
_
a
r
r
a
y
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
t
s
(
$
t
h
i
s
-
>
s
e
s
s
i
o
n
f
i
l
e
)
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
d
a
t
e
s
_
a
r
r
a
y
;

 
 
 
 
}


 
 
 
 
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
 
s
a
v
e
_
l
o
c
k
f
i
l
e
_
d
a
t
a
(
$
d
a
t
e
s
_
a
r
r
a
y
)

 
 
 
 
{

 
 
 
 
 
 
 
 
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
(
$
t
h
i
s
-
>
s
e
s
s
i
o
n
f
i
l
e
,
 
s
e
r
i
a
l
i
z
e
(
$
d
a
t
e
s
_
a
r
r
a
y
)
)
;

 
 
 
 
}


 
 
 
 
/
/
 
A
l
l
o
w
s
 
u
s
 
t
o
 
p
a
s
s
 
e
i
t
h
e
r
 
r
o
o
m
 
u
i
d
s
 
o
r
 
r
o
o
m
t
a
r
i
f
f
 
s
t
r
i
n
g
s
 
(
e
.
g
.
 
4
^
3
)
 
t
o
 
t
h
e
 
c
l
a
s
s
 
a
n
d
 
e
x
t
r
a
c
t
 
t
h
e
 
r
o
o
m
 
u
i
d
 
f
o
r
 
u
s
e
 
w
i
t
h
i
n
 
t
h
e
 
c
l
a
s
s

 
 
 
 
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
 
e
x
t
r
a
c
t
_
r
o
o
m
_
u
i
d
(
$
r
o
o
m
_
u
i
d
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
f
i
n
d
m
e
 
=
 
'
^
'
;

 
 
 
 
 
 
 
 
$
p
o
s
 
=
 
s
t
r
p
o
s
(
$
r
o
o
m
_
u
i
d
,
 
$
f
i
n
d
m
e
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
p
o
s
 
=
=
=
 
f
a
l
s
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
o
o
m
_
u
i
d
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
t
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
r
o
o
m
_
u
i
d
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
t
A
r
r
a
y
[
 
0
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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
_
a
l
l
_
r
o
o
m
s
_
a
l
r
e
a
d
y
_
i
n
_
c
a
r
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
g
e
t
S
i
n
g
l
e
t
o
n
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
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
s
e
s
s
i
o
n
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
j
o
m
r
e
s
s
e
s
s
i
o
n
'
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
_
a
l
r
e
a
d
y
_
i
n
_
c
a
r
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
c
a
r
t
_
d
a
t
a
)
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
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
c
a
r
t
_
d
a
t
a
 
a
s
 
$
c
a
r
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
q
u
e
s
t
e
d
R
o
o
m
s
 
=
 
$
c
a
r
t
[
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
B
a
n
g
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
r
e
q
u
e
s
t
e
d
R
o
o
m
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
o
o
m
B
a
n
g
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
s
[
]
 
=
 
$
t
h
i
s
-
>
e
x
t
r
a
c
t
_
r
o
o
m
_
u
i
d
(
$
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
 
=
 
$
c
a
r
t
[
'
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
s
B
a
n
g
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
d
a
t
e
s
B
a
n
g
 
a
s
 
$
d
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
_
a
l
r
e
a
d
y
_
i
n
_
c
a
r
t
 
[
$
d
a
t
e
]
 
=
 
$
r
o
o
m
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

