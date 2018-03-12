
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
g
e
n
e
r
i
c
_
b
o
o
k
i
n
g
_
e
m
a
i
l

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;


 
 
 
 
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
t
h
i
s
-
>
d
a
t
a
 
=
 
a
r
r
a
y
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
p
a
r
s
e
d
_
e
m
a
i
l
 
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


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
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
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
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
 
g
a
t
h
e
r
_
d
a
t
a
(
$
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
0
,
 
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
 
0
,
 
$
p
r
i
n
t
 
=
 
f
a
l
s
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
n
t
r
a
c
t
_
u
i
d
 
=
=
 
0
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
E
r
r
o
r
:
 
C
o
n
t
r
a
c
t
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
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
=
 
0
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
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
c
o
n
t
r
a
c
t
_
u
i
d
,
 
$
t
h
i
s
-
>
d
a
t
a
)
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
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
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
t
h
i
s
J
R
U
s
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
r
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
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


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
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
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
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
)
;


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
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
b
a
s
i
c
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
c
o
n
t
r
a
c
t
_
u
i
d
,
 
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
)
;


 
 
 
 
 
 
 
 
/
/
s
e
l
e
c
t
e
d
 
r
o
o
m
s
/
r
e
s
o
u
r
c
e
s
 
a
n
d
 
t
a
r
i
f
f
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
R
O
O
M
S
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
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
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
r
o
o
m
d
e
e
t
s
'
]
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
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
r
o
o
m
d
e
e
t
s
'
]
 
a
s
 
$
r
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
R
O
O
M
S
'
]
 
.
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
a
l
l
_
r
o
o
m
_
t
y
p
e
s
[
$
r
d
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
]
[
'
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
'
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
d
[
 
'
r
o
o
m
_
n
a
m
e
'
 
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
R
O
O
M
S
'
]
 
.
=
 
'
 
-
 
'
.
$
r
d
[
 
'
r
o
o
m
_
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
d
[
 
'
r
o
o
m
_
n
u
m
b
e
r
'
 
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
R
O
O
M
S
'
]
 
.
=
 
'
 
-
 
'
.
$
r
d
[
 
'
r
o
o
m
_
n
u
m
b
e
r
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
R
O
O
M
S
'
]
 
.
=
 
'
;
 
'
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
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
T
A
R
I
F
F
S
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
T
A
R
I
F
F
S
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
T
A
R
I
F
F
S
'
]
 
.
=
 
$
r
d
[
 
'
r
a
t
e
_
t
i
t
l
e
'
 
]
.
'
;
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
g
u
e
s
t
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
F
I
R
S
T
N
A
M
E
'
]
 
=
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
f
i
r
s
t
n
a
m
e
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
S
U
R
N
A
M
E
'
]
 
=
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
s
u
r
n
a
m
e
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
H
O
U
S
E
'
]
 
=
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
h
o
u
s
e
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
S
T
R
E
E
T
'
]
 
=
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
s
t
r
e
e
t
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
T
O
W
N
'
]
 
=
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
t
o
w
n
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
R
E
G
I
O
N
'
]
 
=
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
c
o
u
n
t
y
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
C
O
U
N
T
R
Y
'
]
 
=
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
c
o
u
n
t
r
y
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
P
O
S
T
C
O
D
E
'
]
 
=
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
p
o
s
t
c
o
d
e
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
L
A
N
D
L
I
N
E
'
]
 
=
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
t
e
l
_
l
a
n
d
l
i
n
e
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
M
O
B
I
L
E
'
]
 
=
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
t
e
l
_
m
o
b
i
l
e
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
E
M
A
I
L
'
]
 
=
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
e
m
a
i
l
'
]
;


 
 
 
 
 
 
 
 
/
/
e
x
t
r
a
s
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
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
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
e
x
t
r
a
d
e
e
t
s
'
]
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
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
e
x
t
r
a
d
e
e
t
s
'
]
 
a
s
 
$
e
x
t
r
a
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
E
X
T
R
A
S
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
E
X
T
R
A
S
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
E
X
T
R
A
S
'
]
 
.
=
 
$
e
x
t
r
a
[
'
n
a
m
e
'
]
.
'
 
x
 
'
.
$
e
x
t
r
a
[
'
q
t
y
'
]
.
'
;
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
l
i
n
k
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
L
I
N
K
_
T
O
_
P
R
O
P
E
R
T
Y
'
]
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
g
e
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
_
u
r
l
(
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
,
'
n
o
s
e
f
'
)
.
'
"
>
'
.
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
W
E
B
S
I
T
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
W
E
B
S
I
T
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
'
<
/
a
>
'
;


 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
 
&
&
 
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
L
I
N
K
_
T
O
_
B
O
O
K
I
N
G
'
]
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
N
O
S
E
F
.
'
&
t
a
s
k
=
m
u
v
i
e
w
b
o
o
k
i
n
g
&
c
o
n
t
r
a
c
t
_
u
i
d
=
'
.
$
c
o
n
t
r
a
c
t
_
u
i
d
.
'
"
>
'
.
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
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
B
O
O
K
I
N
G
'
,
 
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
B
O
O
K
I
N
G
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
'
<
/
a
>
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
n
u
m
b
e
r
 
o
f
 
g
u
e
s
t
 
t
y
p
e
s

 
 
 
 
 
 
 
 
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
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
t
y
p
e
'
]
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
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
t
y
p
e
'
]
 
a
s
 
$
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
N
U
M
B
E
R
_
O
F
_
G
U
E
S
T
S
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
N
U
M
B
E
R
_
O
F
_
G
U
E
S
T
S
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
N
U
M
B
E
R
_
O
F
_
G
U
E
S
T
S
'
]
 
.
=
 
$
t
y
p
e
[
 
'
t
i
t
l
e
'
 
]
.
'
 
x
 
'
.
$
t
y
p
e
[
 
'
q
t
y
'
 
]
.
'
,
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
i
n
v
o
i
c
e
 
p
r
i
n
t
o
u
t

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
i
d
 
=
 
0
;


 
 
 
 
 
 
 
 
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
m
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
D
a
t
a
[
 
'
0
3
0
2
5
'
 
]
[
 
'
i
n
s
e
r
t
b
o
o
k
i
n
g
_
i
n
v
o
i
c
e
'
 
]
[
 
'
i
n
v
o
i
c
e
_
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
i
d
 
=
 
(
i
n
t
)
 
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
m
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
D
a
t
a
[
 
'
0
3
0
2
5
'
 
]
[
 
'
i
n
s
e
r
t
b
o
o
k
i
n
g
_
i
n
v
o
i
c
e
'
 
]
[
 
'
i
n
v
o
i
c
e
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
i
d
 
=
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
i
n
v
o
i
c
e
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
t
e
m
p
l
a
t
e
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
5
'
,
 
'
v
i
e
w
_
i
n
v
o
i
c
e
'
,
 
a
r
r
a
y
(
'
i
n
t
e
r
n
a
l
_
c
a
l
l
'
 
=
>
 
t
r
u
e
,
 
'
i
n
v
o
i
c
e
_
i
d
'
 
=
>
 
$
i
n
v
o
i
c
e
_
i
d
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
I
N
V
O
I
C
E
'
]
 
=
 
$
i
n
v
o
i
c
e
_
t
e
m
p
l
a
t
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
q
r
 
c
o
d
e
s

 
 
 
 
 
 
 
 
$
u
r
l
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
N
O
S
E
F
.
'
&
t
a
s
k
=
e
d
i
t
_
b
o
o
k
i
n
g
&
t
h
i
s
P
r
o
p
e
r
t
y
=
'
.
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
&
c
o
n
t
r
a
c
t
_
u
i
d
=
'
.
$
c
o
n
t
r
a
c
t
_
u
i
d
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
Q
R
_
C
O
D
E
_
O
F
F
I
C
E
'
]
 
=
 
j
o
m
r
e
s
_
m
a
k
e
_
q
r
_
c
o
d
e
(
$
u
r
l
)
;


 
 
 
 
 
 
 
 
$
u
r
l
 
=
 
m
a
k
e
_
g
m
a
p
_
u
r
l
_
f
o
r
_
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
(
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
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
Q
R
_
C
O
D
E
_
M
A
P
'
]
 
=
 
j
o
m
r
e
s
_
m
a
k
e
_
q
r
_
c
o
d
e
(
$
u
r
l
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
p
r
i
n
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
Q
R
_
O
F
F
I
C
E
'
]
 
=
 
'
<
i
m
g
 
s
r
c
=
"
'
.
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
Q
R
_
C
O
D
E
_
O
F
F
I
C
E
'
]
[
'
r
e
l
a
t
i
v
e
_
p
a
t
h
'
]
.
'
"
 
w
i
d
t
h
=
"
1
0
0
"
 
h
e
i
g
h
t
=
"
1
0
0
"
 
a
l
t
=
"
q
r
c
o
d
e
"
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
Q
R
_
D
I
R
E
C
T
I
O
N
S
'
]
 
=
 
'
<
i
m
g
 
s
r
c
=
"
'
.
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
Q
R
_
C
O
D
E
_
M
A
P
'
]
[
'
r
e
l
a
t
i
v
e
_
p
a
t
h
'
]
.
'
"
 
w
i
d
t
h
=
"
1
0
0
"
 
h
e
i
g
h
t
=
"
1
0
0
"
 
a
l
t
=
"
q
r
c
o
d
e
"
/
>
'
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
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
Q
R
_
O
F
F
I
C
E
'
]
 
=
 
'
<
i
m
g
 
s
r
c
=
"
c
i
d
:
q
r
_
c
o
d
e
_
o
f
f
i
c
e
"
 
w
i
d
t
h
=
"
1
0
0
"
 
h
e
i
g
h
t
=
"
1
0
0
"
 
a
l
t
=
"
q
r
c
o
d
e
"
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
Q
R
_
D
I
R
E
C
T
I
O
N
S
'
]
 
=
 
'
<
i
m
g
 
s
r
c
=
"
c
i
d
:
q
r
_
c
o
d
e
_
m
a
p
"
 
w
i
d
t
h
=
"
1
0
0
"
 
h
e
i
g
h
t
=
"
1
0
0
"
 
a
l
t
=
"
q
r
c
o
d
e
"
/
>
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
c
u
s
t
o
m
 
f
i
e
l
d
s

 
 
 
 
 
 
 
 
$
p
t
y
p
e
_
i
d
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
t
y
p
e
_
i
d
;

 
 
 
 
 
 
 
 
$
c
u
s
t
o
m
_
f
i
e
l
d
_
o
u
t
p
u
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


 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
c
u
s
t
o
m
_
f
i
e
l
d
_
h
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
u
s
t
o
m
_
f
i
e
l
d
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
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
 
=
 
$
j
o
m
r
e
s
_
c
u
s
t
o
m
_
f
i
e
l
d
_
h
a
n
d
l
e
r
-
>
g
e
t
A
l
l
C
u
s
t
o
m
F
i
e
l
d
s
B
y
P
t
y
p
e
I
d
(
$
p
t
y
p
e
_
i
d
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
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
C
U
S
T
O
M
_
F
I
E
L
D
S
'
]
 
=
 
'
'
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
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
 
a
s
 
$
f
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
o
r
m
f
i
e
l
d
n
a
m
e
 
=
 
$
f
[
 
'
f
i
e
l
d
n
a
m
e
'
 
]
.
'
_
'
.
$
f
[
 
'
u
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
t
m
p
b
o
o
k
i
n
g
[
 
$
f
o
r
m
f
i
e
l
d
n
a
m
e
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
C
U
S
T
O
M
_
F
I
E
L
D
S
'
]
 
.
=
 
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
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
'
.
$
f
[
 
'
u
i
d
'
 
]
,
 
$
f
[
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
]
)
.
'
:
 
'
.
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
t
m
p
b
o
o
k
i
n
g
[
 
$
f
o
r
m
f
i
e
l
d
n
a
m
e
 
]
.
'
;
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
o
t
h
e
r
 
o
u
t
p
u
t

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
P
A
Y
M
E
N
T
_
L
I
N
K
'
]
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
N
O
S
E
F
.
'
&
t
a
s
k
=
c
o
n
f
i
r
m
b
o
o
k
i
n
g
&
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
=
'
.
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
&
s
k
=
'
.
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
s
e
c
r
e
t
_
k
e
y
'
]
.
'
&
n
o
f
o
l
l
o
w
t
m
p
l
=
n
o
f
o
l
l
o
w
t
m
p
l
'
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
B
O
O
K
I
N
G
_
N
U
M
B
E
R
'
]
 
=
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
t
a
g
'
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
A
R
R
I
V
A
L
'
]
 
=
 
o
u
t
p
u
t
D
a
t
e
(
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
a
r
r
i
v
a
l
'
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
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
D
E
P
A
R
T
U
R
E
'
]
 
=
 
o
u
t
p
u
t
D
a
t
e
(
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
d
e
p
a
r
t
u
r
e
'
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
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
T
O
T
A
L
'
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
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
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
D
E
P
O
S
I
T
'
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
]
)
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
d
e
p
o
s
i
t
_
p
a
i
d
'
]
 
=
=
 
1
)
 
{

	
	
	
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
B
A
L
A
N
C
E
'
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
]
 
-
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
]
)
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
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
B
A
L
A
N
C
E
'
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
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
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
S
P
E
C
I
A
L
_
R
E
Q
U
I
R
E
M
E
N
T
S
'
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
s
p
e
c
i
a
l
_
r
e
q
s
'
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
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
C
A
N
C
E
L
L
E
D
_
R
E
A
S
O
N
'
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
c
a
n
c
e
l
l
e
d
_
r
e
a
s
o
n
'
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
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
A
L
L
O
C
A
T
I
O
N
_
N
O
T
E
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
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
t
m
p
b
o
o
k
i
n
g
[
 
'
b
o
o
k
i
n
g
_
n
o
t
e
s
'
 
]
[
 
'
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
_
n
o
t
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
A
L
L
O
C
A
T
I
O
N
_
N
O
T
E
'
]
 
=
 
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
t
m
p
b
o
o
k
i
n
g
[
 
'
b
o
o
k
i
n
g
_
n
o
t
e
s
'
 
]
[
 
'
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
_
n
o
t
e
'
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

	
	
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
B
O
O
K
I
N
G
_
C
R
E
A
T
I
O
N
_
D
A
T
E
'
]
 
=
 
o
u
t
p
u
t
D
a
t
e
(
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
t
i
m
e
s
t
a
m
p
'
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
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
B
O
O
K
I
N
G
_
L
E
N
G
T
H
'
]
 
=
 
d
a
t
e
D
i
f
f
(
'
d
'
,
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
a
r
r
i
v
a
l
'
]
,
 
$
c
u
r
r
e
n
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
d
e
p
a
r
t
u
r
e
'
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
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
R
E
M
O
T
E
_
I
P
'
]
 
=
 
$
_
S
E
R
V
E
R
[
'
R
E
M
O
T
E
_
A
D
D
R
'
]
;


 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
a
d
d
r
e
s
s
 
a
n
d
 
p
o
l
i
c
i
e
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
P
R
O
P
E
R
T
Y
_
N
A
M
E
'
]
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
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
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
P
R
O
P
E
R
T
Y
_
S
T
R
E
E
T
'
]
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
s
t
r
e
e
t
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
P
R
O
P
E
R
T
Y
_
T
O
W
N
'
]
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
t
o
w
n
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
P
R
O
P
E
R
T
Y
_
R
E
G
I
O
N
'
]
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
r
e
g
i
o
n
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
P
R
O
P
E
R
T
Y
_
C
O
U
N
T
R
Y
'
]
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
c
o
u
n
t
r
y
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
P
R
O
P
E
R
T
Y
_
P
O
S
T
C
O
D
E
'
]
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
p
o
s
t
c
o
d
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
P
R
O
P
E
R
T
Y
_
T
E
L
'
]
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
t
e
l
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
P
R
O
P
E
R
T
Y
_
F
A
X
'
]
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
f
a
x
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
P
R
O
P
E
R
T
Y
_
E
M
A
I
L
'
]
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
e
m
a
i
l
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
P
O
L
I
C
I
E
S
_
A
N
D
_
D
I
S
C
L
A
I
M
E
R
S
'
]
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
;


 
 
 
 
 
 
 
 
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
 
p
a
r
s
e
_
e
m
a
i
l
(
$
e
m
a
i
l
_
t
y
p
e
 
=
 
'
'
,
 
$
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
r
s
e
d
_
e
m
a
i
l
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
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
$
e
m
a
i
l
_
t
y
p
e
 
=
=
 
'
'
 
|
|
 
$
c
o
n
t
r
a
c
t
_
u
i
d
 
=
=
 
0
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


 
 
 
 
 
 
 
 
/
/
g
e
t
 
c
u
s
t
o
m
 
t
e
m
p
l
a
t
e

 
 
 
 
 
 
 
 
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
i
s
s
e
t
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
'
0
3
1
5
0
'
]
[
$
e
m
a
i
l
_
t
y
p
e
]
)
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
-
>
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
3
1
5
0
'
,
 
$
e
m
a
i
l
_
t
y
p
e
)
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
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
e
m
a
i
l
_
d
e
f
a
u
l
t
_
h
t
m
l
 
=
 
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
m
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
D
a
t
a
[
'
0
3
1
5
0
'
]
[
$
e
m
a
i
l
_
t
y
p
e
]
[
'
d
e
f
a
u
l
t
_
t
e
m
p
l
a
t
e
'
]
)
;

 
 
 
 
 
 
 
 
$
e
m
a
i
l
_
d
e
f
a
u
l
t
_
h
t
m
l
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
[
'
,
 
'
{
'
,
 
$
e
m
a
i
l
_
d
e
f
a
u
l
t
_
h
t
m
l
)
;

 
 
 
 
 
 
 
 
$
e
m
a
i
l
_
d
e
f
a
u
l
t
_
h
t
m
l
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
]
'
,
 
'
}
'
,
 
$
e
m
a
i
l
_
d
e
f
a
u
l
t
_
h
t
m
l
)
;


 
 
 
 
 
 
 
 
$
e
m
a
i
l
_
b
o
d
y
 
=
 
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
E
M
A
I
L
_
T
E
X
T
_
'
.
$
e
m
a
i
l
_
t
y
p
e
,
 
$
e
m
a
i
l
_
d
e
f
a
u
l
t
_
h
t
m
l
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
e
m
a
i
l
_
s
u
b
j
e
c
t
 
=
 
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
E
M
A
I
L
_
S
U
B
J
E
C
T
_
'
.
$
e
m
a
i
l
_
t
y
p
e
,
 
'
[
P
R
O
P
E
R
T
Y
_
N
A
M
E
]
 
-
 
[
B
O
O
K
I
N
G
_
N
U
M
B
E
R
]
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
/
/
l
e
t
`
s
 
r
e
p
l
a
c
e
 
t
h
e
 
[
 
]
 
w
i
t
h
 
{
 
}

 
 
 
 
 
 
 
 
$
e
m
a
i
l
_
b
o
d
y
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
[
'
,
 
'
{
'
,
 
$
e
m
a
i
l
_
b
o
d
y
)
;

 
 
 
 
 
 
 
 
$
e
m
a
i
l
_
b
o
d
y
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
]
'
,
 
'
}
'
,
 
$
e
m
a
i
l
_
b
o
d
y
)
;

 
 
 
 
 
 
 
 
$
e
m
a
i
l
_
s
u
b
j
e
c
t
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
[
'
,
 
'
{
'
,
 
$
e
m
a
i
l
_
s
u
b
j
e
c
t
)
;

 
 
 
 
 
 
 
 
$
e
m
a
i
l
_
s
u
b
j
e
c
t
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
]
'
,
 
'
}
'
,
 
$
e
m
a
i
l
_
s
u
b
j
e
c
t
)
;


 
 
 
 
 
 
 
 
/
/
p
a
r
s
e
 
e
m
a
i
l
s

 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
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
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
;


 
 
 
 
 
 
 
 
/
/
p
a
r
s
e
 
e
m
a
i
l
 
s
u
b
j
e
c
t

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
<
p
a
t
T
e
m
p
l
a
t
e
:
t
m
p
l
 
n
a
m
e
=
"
p
a
g
e
o
u
t
p
u
t
"
 
u
n
u
s
e
d
v
a
r
s
=
"
s
t
r
i
p
"
>
'
.
$
e
m
a
i
l
_
s
u
b
j
e
c
t
.
'
<
/
p
a
t
T
e
m
p
l
a
t
e
:
t
m
p
l
>
'
,
 
'
S
t
r
i
n
g
'
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
r
s
e
d
_
e
m
a
i
l
[
'
s
u
b
j
e
c
t
'
]
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;


 
 
 
 
 
 
 
 
/
/
p
a
r
s
e
 
e
m
a
i
l
 
b
o
d
y

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
<
p
a
t
T
e
m
p
l
a
t
e
:
t
m
p
l
 
n
a
m
e
=
"
p
a
g
e
o
u
t
p
u
t
"
 
u
n
u
s
e
d
v
a
r
s
=
"
s
t
r
i
p
"
>
'
.
$
e
m
a
i
l
_
b
o
d
y
.
'
<
/
p
a
t
T
e
m
p
l
a
t
e
:
t
m
p
l
>
'
,
 
'
S
t
r
i
n
g
'
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
r
s
e
d
_
e
m
a
i
l
[
'
t
e
x
t
'
]
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;


 
 
 
 
 
 
 
 
/
/
a
t
t
a
c
h
m
e
n
t
s

 
 
 
 
 
 
 
 
$
o
f
f
i
c
e
_
q
r
_
c
o
d
e
 
=
 
a
r
r
a
y
(
'
t
y
p
e
'
 
=
>
 
'
i
m
a
g
e
'
,
 
'
i
m
a
g
e
_
p
a
t
h
'
 
=
>
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
Q
R
_
C
O
D
E
_
O
F
F
I
C
E
'
]
[
 
'
a
b
s
o
l
u
t
e
_
p
a
t
h
'
 
]
,
 
'
C
I
D
'
 
=
>
 
'
q
r
_
c
o
d
e
_
o
f
f
i
c
e
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
p
a
r
s
e
d
_
e
m
a
i
l
[
'
a
t
t
a
c
h
m
e
n
t
s
'
]
[
]
 
=
 
$
o
f
f
i
c
e
_
q
r
_
c
o
d
e
;


 
 
 
 
 
 
 
 
$
m
a
p
_
q
r
_
c
o
d
e
 
=
 
a
r
r
a
y
(
'
t
y
p
e
'
 
=
>
 
'
i
m
a
g
e
'
,
 
'
i
m
a
g
e
_
p
a
t
h
'
 
=
>
 
$
t
h
i
s
-
>
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
Q
R
_
C
O
D
E
_
M
A
P
'
]
[
 
'
a
b
s
o
l
u
t
e
_
p
a
t
h
'
 
]
,
 
'
C
I
D
'
 
=
>
 
'
q
r
_
c
o
d
e
_
m
a
p
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
p
a
r
s
e
d
_
e
m
a
i
l
[
'
a
t
t
a
c
h
m
e
n
t
s
'
]
[
]
 
=
 
$
m
a
p
_
q
r
_
c
o
d
e
;


 
 
 
 
 
 
 
 
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

