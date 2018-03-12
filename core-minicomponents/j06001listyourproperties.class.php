
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
0
6
0
0
1
l
i
s
t
y
o
u
r
p
r
o
p
e
r
t
i
e
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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
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
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
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

	
	

	
	
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
'
'
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


 
 
 
 
 
 
 
 
$
p
u
b
l
i
s
h
e
d
 
=
 
(
i
n
t
)
 
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
P
O
S
T
,
 
'
p
u
b
l
i
s
h
e
d
'
,
 
'
2
'
)
;

 
 
 
 
 
 
 
 
$
a
p
p
r
o
v
e
d
 
=
 
(
i
n
t
)
 
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
P
O
S
T
,
 
'
a
p
p
r
o
v
e
d
'
,
 
'
2
'
)
;

 
 
 
 
 
 
 
 
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
 
(
i
n
t
)
 
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
P
O
S
T
,
 
'
p
t
y
p
e
'
,
 
'
0
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
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
o
u
t
p
u
t
_
n
o
w
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
o
u
t
p
u
t
_
n
o
w
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
o
u
t
p
u
t
_
n
o
w
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
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
s
u
b
s
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
r
o
w
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

 
 
 
 
 
 
 
 
$
s
u
b
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


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
P
A
G
E
T
I
T
L
E
'
 
]
 
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
J
O
M
R
E
S
_
H
L
I
S
T
_
P
R
O
P
E
R
T
I
E
S
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
H
L
I
S
T
_
P
R
O
P
E
R
T
I
E
S
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
S
T
A
T
U
S
'
 
]
 
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
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
P
R
O
P
E
R
T
Y
U
I
D
'
 
]
 
=
 
'
U
i
d
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
P
R
O
P
E
R
T
Y
N
A
M
E
'
 
]
 
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
J
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
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
S
T
R
E
E
T
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
S
T
R
E
E
T
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
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
T
O
W
N
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
T
O
W
N
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
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
R
E
G
I
O
N
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
R
E
G
I
O
N
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
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
C
O
U
N
T
R
Y
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
C
O
U
N
T
R
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
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
P
O
S
T
C
O
D
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
P
O
S
T
C
O
D
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
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
T
E
L
E
P
H
O
N
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
T
E
L
E
P
H
O
N
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
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
E
M
A
I
L
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
E
M
A
I
L
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
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
F
A
X
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
F
A
X
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
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
A
R
S
'
 
]
 
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
S
T
A
R
S
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
S
T
A
R
S
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
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
U
P
E
R
I
O
R
'
 
]
 
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
S
U
P
E
R
I
O
R
'
,
 
'
J
O
M
R
E
S
_
S
U
P
E
R
I
O
R
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
P
R
O
P
E
R
T
Y
_
L
A
T
'
 
]
 
=
 
'
L
a
t
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
P
R
O
P
E
R
T
Y
_
L
O
N
G
'
 
]
 
=
 
'
L
o
n
g
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
A
P
P
R
O
V
E
D
'
 
]
 
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
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
A
P
P
R
O
V
E
D
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
H
S
T
A
T
U
S
_
A
P
P
R
O
V
E
D
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
A
C
T
I
V
E
'
 
]
 
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
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
C
U
R
R
E
N
T
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
H
S
T
A
T
U
S
_
C
U
R
R
E
N
T
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
L
A
S
T
C
H
A
N
G
E
D
'
 
]
 
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
J
O
M
R
E
S
_
H
L
A
S
T
C
H
A
N
G
E
D
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
H
L
A
S
T
C
H
A
N
G
E
D
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
L
E
G
E
N
D
'
 
]
 
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
J
O
M
R
E
S
_
H
L
E
G
E
N
D
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
H
L
E
G
E
N
D
'
,
 
f
a
l
s
e
)
;

	
	
$
o
u
t
p
u
t
[
 
'
H
N
O
T
C
O
M
P
L
E
T
E
D
'
 
]
 
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
I
N
C
O
M
P
L
E
T
E
'
,
 
'
J
O
M
R
E
S
_
I
N
C
O
M
P
L
E
T
E
'
)
;

	
	
$
o
u
t
p
u
t
[
 
'
H
W
A
I
T
I
N
G
A
P
P
R
O
V
A
L
'
 
]
 
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
W
A
T
I
N
G
_
A
P
P
R
O
V
A
L
'
,
 
'
J
O
M
R
E
S
_
W
A
T
I
N
G
_
A
P
P
R
O
V
A
L
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
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
a
c
c
e
s
s
l
e
v
e
l
 
>
 
5
0
)
 
{
 
/
/
h
i
g
h
e
r
 
t
h
a
n
 
r
e
c
e
p
t
i
o
n
i
s
t

 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
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
r
[
'
H
N
E
W
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
N
E
W
P
R
O
P
E
R
T
Y
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
N
E
W
P
R
O
P
E
R
T
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
N
E
W
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
U
R
L
'
]
 
=
 
j
o
m
r
e
s
U
r
l
(
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
.
'
&
t
a
s
k
=
n
e
w
_
p
r
o
p
e
r
t
y
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
s
[
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
f
i
l
t
e
r
s
 
o
u
t
p
u
t

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
F
I
L
T
E
R
'
]
 
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
J
O
M
R
E
S
_
H
F
I
L
T
E
R
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
H
F
I
L
T
E
R
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
P
U
B
L
I
S
H
E
D
_
S
T
A
T
U
S
'
]
 
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
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
P
U
B
L
I
S
H
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
R
E
S
_
H
S
T
A
T
U
S
_
P
U
B
L
I
S
H
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
P
T
Y
P
E
'
]
 
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
J
O
M
R
E
S
_
F
R
O
N
T
_
P
T
Y
P
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
F
R
O
N
T
_
P
T
Y
P
E
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
$
o
p
t
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

 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
2
'
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
S
T
A
T
U
S
_
A
N
Y
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
S
T
A
T
U
S
_
A
N
Y
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
1
'
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
S
T
A
T
U
S
_
P
U
B
L
I
S
H
E
D
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
S
T
A
T
U
S
_
P
U
B
L
I
S
H
E
D
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
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
S
T
A
T
U
S
_
N
O
T
_
P
U
B
L
I
S
H
E
D
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
S
T
A
T
U
S
_
N
O
T
_
P
U
B
L
I
S
H
E
D
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
P
U
B
L
I
S
H
E
D
_
S
T
A
T
U
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
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
'
p
u
b
l
i
s
h
e
d
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
p
u
b
l
i
s
h
e
d
)
;


 
 
 
 
 
 
 
 
$
o
p
t
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

 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
2
'
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
S
T
A
T
U
S
_
A
N
Y
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
S
T
A
T
U
S
_
A
N
Y
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
1
'
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
C
O
M
_
M
R
_
Y
E
S
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
Y
E
S
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
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
C
O
M
_
M
R
_
N
O
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
N
O
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
A
P
P
R
O
V
E
D
_
S
T
A
T
U
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
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
'
a
p
p
r
o
v
e
d
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
a
p
p
r
o
v
e
d
)
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
 
t
y
p
e
 
f
i
l
t
e
r

 
 
 
 
 
 
 
 
$
o
p
t
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

 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
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
S
T
A
T
U
S
_
A
N
Y
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
S
T
A
T
U
S
_
A
N
Y
'
,
 
f
a
l
s
e
)
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
y
p
e
_
t
i
t
l
e
s
 
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
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
k
,
 
$
v
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
P
T
Y
P
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
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
'
p
t
y
p
e
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
A
J
A
X
_
U
R
L
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
A
J
A
X
.
'
&
t
a
s
k
=
l
i
s
t
y
o
u
r
p
r
o
p
e
r
t
i
e
s
_
a
j
a
x
&
p
u
b
l
i
s
h
e
d
=
'
.
$
p
u
b
l
i
s
h
e
d
.
'
&
a
p
p
r
o
v
e
d
=
'
.
$
a
p
p
r
o
v
e
d
.
'
&
p
t
y
p
e
=
'
.
$
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
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
s
u
b
s
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
s
u
b
s
;

 
 
 
 
 
 
 
 
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
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
F
R
O
N
T
E
N
D
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
f
r
o
n
t
e
n
d
_
l
i
s
t
_
p
r
o
p
e
r
t
i
e
s
.
h
t
m
l
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
r
o
w
s
'
,
 
$
r
o
w
s
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
s
u
b
s
'
,
 
$
s
u
b
s
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
o
u
t
p
u
t
_
n
o
w
)
 
{

	
	
	
$
t
m
p
l
-
>
d
i
s
p
l
a
y
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
r
e
t
V
a
l
s
 
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

	
	
}

 
 
 
 
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
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
;

 
 
 
 
}

}

