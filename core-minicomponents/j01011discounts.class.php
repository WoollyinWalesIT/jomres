
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
1
0
1
1
d
i
s
c
o
u
n
t
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
 
t
r
u
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
s
 
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
 
]
)
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
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
s
'
 
]
)
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
s
 
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
s
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
r
e
t
u
r
n
V
a
l
u
e
 
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
a
l
l
P
r
o
p
e
r
t
i
e
s
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


 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
a
r
r
a
y
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
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
l
e
v
a
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
i
e
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
s
 
a
s
 
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
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
C
o
n
f
i
g
 
=
 
$
a
l
l
P
r
o
p
e
r
t
i
e
s
C
o
n
f
i
g
-
>
l
o
a
d
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
c
o
n
f
i
g
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
C
o
n
f
i
g
[
'
l
a
s
t
m
i
n
u
t
e
a
c
t
i
v
e
'
]
)
 
&
&
 
$
t
m
p
C
o
n
f
i
g
[
'
l
a
s
t
m
i
n
u
t
e
a
c
t
i
v
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
l
e
v
a
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
i
e
s
[
 
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
 
]
[
 
'
d
i
s
c
o
u
n
t
_
t
y
p
e
'
 
]
 
=
 
'
l
a
s
t
m
i
n
u
t
e
a
c
t
i
v
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
l
e
v
a
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
i
e
s
[
 
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
 
]
[
 
'
l
a
s
t
m
i
n
u
t
e
t
h
r
e
s
h
o
l
d
'
 
]
 
=
 
$
t
m
p
C
o
n
f
i
g
[
'
l
a
s
t
m
i
n
u
t
e
t
h
r
e
s
h
o
l
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
l
e
v
a
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
i
e
s
[
 
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
 
]
[
 
'
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
'
 
]
 
=
 
$
t
m
p
C
o
n
f
i
g
[
'
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
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
C
o
n
f
i
g
[
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
e
'
]
)
 
&
&
 
$
t
m
p
C
o
n
f
i
g
[
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
l
e
v
a
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
i
e
s
[
 
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
 
]
[
 
'
d
i
s
c
o
u
n
t
_
t
y
p
e
'
 
]
 
=
 
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
l
e
v
a
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
i
e
s
[
 
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
 
]
[
 
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
 
]
 
=
 
$
t
m
p
C
o
n
f
i
g
[
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
l
e
v
a
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
i
e
s
[
 
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
 
]
[
 
'
w
i
s
e
p
r
i
c
e
7
5
d
i
s
c
o
u
n
t
'
 
]
 
=
 
$
t
m
p
C
o
n
f
i
g
[
'
w
i
s
e
p
r
i
c
e
7
5
d
i
s
c
o
u
n
t
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
s
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
l
i
s
t
_
d
i
s
c
o
u
n
t
s
'
,
 
$
r
e
l
e
v
a
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
i
e
s
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
l
e
v
a
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
i
e
s
 
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
l
i
s
t
_
d
i
s
c
o
u
n
t
s
'
)
;

	
	
	
$
o
r
i
g
i
n
a
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
r
e
l
e
v
a
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
i
e
s
[
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
]
)
)
 
{

	
	
	
	
s
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

	
	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
l
e
v
a
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
i
e
s
[
 
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
 
]
[
 
'
d
i
s
c
o
u
n
t
_
t
y
p
e
'
 
]
 
=
=
 
'
l
a
s
t
m
i
n
u
t
e
a
c
t
i
v
e
'
)
 
{
 
/
/
 
U
s
i
n
g
 
l
a
s
t
 
m
i
n
u
t
e
 
c
a
l
c
u
l
a
t
i
o
n
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
s
t
m
i
n
u
t
e
t
h
r
e
s
h
o
l
d
 
=
 
$
r
e
l
e
v
a
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
i
e
s
[
 
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
 
]
[
 
'
l
a
s
t
m
i
n
u
t
e
t
h
r
e
s
h
o
l
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
 
=
 
$
r
e
l
e
v
a
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
i
e
s
[
 
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
 
]
[
 
'
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
d
a
y
s
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
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
/
'
,
 
$
t
o
d
a
y
s
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
$
l
a
s
t
m
i
n
u
t
e
t
h
r
e
s
h
o
l
d
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
t
e
s
t
D
a
t
e
 
=
 
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
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
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
R
E
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
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
R
E
'
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
.
=
 
$
l
a
s
t
m
i
n
u
t
e
d
i
s
c
o
u
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
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
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
M
I
D
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
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
M
I
D
'
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
.
=
 
'
 
'
.
$
l
a
t
e
s
t
D
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
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
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
O
S
T
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
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
O
S
T
'
,
 
f
a
l
s
e
,
 
t
r
u
e
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
e
t
u
r
n
V
a
l
u
e
 
=
 
a
r
r
a
y
(
'
L
A
S
T
M
I
N
U
T
E
'
 
=
>
 
$
t
e
x
t
,
 
'
L
A
S
T
M
I
N
U
T
E
C
L
A
S
S
'
 
=
>
 
'
j
o
m
r
e
s
_
m
e
s
s
a
g
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
r
e
l
e
v
a
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
i
e
s
[
 
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
 
]
[
 
'
d
i
s
c
o
u
n
t
_
t
y
p
e
'
 
]
 
=
=
 
'
w
i
s
e
p
r
i
c
e
a
c
t
i
v
e
'
)
 
{
 
/
/
 
U
s
i
n
g
 
w
i
s
e
p
r
i
c
e
 
c
a
l
c
u
l
a
t
i
o
n
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
 
=
 
$
r
e
l
e
v
a
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
i
e
s
[
 
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
 
]
[
 
'
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
i
s
e
p
r
i
c
e
d
i
s
c
o
u
n
t
 
=
 
$
r
e
l
e
v
a
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
i
e
s
[
 
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
 
]
[
 
'
w
i
s
e
p
r
i
c
e
7
5
d
i
s
c
o
u
n
t
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
d
a
y
s
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
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
/
'
,
 
$
t
o
d
a
y
s
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
$
w
i
s
e
p
r
i
c
e
t
h
r
e
s
h
o
l
d
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
t
e
s
t
D
a
t
e
 
=
 
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
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
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
R
E
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
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
R
E
'
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
.
=
 
(
f
l
o
a
t
)
 
$
w
i
s
e
p
r
i
c
e
d
i
s
c
o
u
n
t
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
L
A
S
T
M
I
N
U
T
E
_
O
R
M
O
R
E
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
L
A
S
T
M
I
N
U
T
E
_
O
R
M
O
R
E
'
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
.
=
 
'
 
'
.
$
l
a
t
e
s
t
D
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
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
_
J
O
M
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
O
S
T
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
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
O
S
T
'
,
 
f
a
l
s
e
,
 
t
r
u
e
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
e
t
u
r
n
V
a
l
u
e
 
=
 
a
r
r
a
y
(
'
L
A
S
T
M
I
N
U
T
E
'
 
=
>
 
$
t
e
x
t
,
 
'
L
A
S
T
M
I
N
U
T
E
C
L
A
S
S
'
 
=
>
 
'
j
o
m
r
e
s
_
m
e
s
s
a
g
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	

	
	
	
s
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
,
 
$
o
r
i
g
i
n
a
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
u
i
d
)
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
 
t
o
u
c
h
_
t
e
m
p
l
a
t
e
_
l
a
n
g
u
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
[
 
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
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
O
S
T
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
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
O
S
T
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
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
O
R
M
O
R
E
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
L
A
S
T
M
I
N
U
T
E
_
O
R
M
O
R
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
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
R
E
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
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
R
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
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
M
I
D
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
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
M
I
D
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
C
O
M
P
_
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
O
S
T
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
L
A
S
T
M
I
N
U
T
E
_
P
R
O
P
E
R
T
Y
L
I
S
T
_
P
O
S
T
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
o
u
t
p
u
t
 
a
s
 
$
o
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
o
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


/
*
*

 
*
 
M
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
 
m
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
.

 
#

 
*
 
R
e
t
u
r
n
s
 
a
n
y
 
s
e
t
t
i
n
g
s
 
t
h
e
 
t
h
e
 
m
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
 
w
a
n
t
s
 
t
o
 
s
e
n
d
 
b
a
c
k
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
.
 
I
n
 
a
d
d
i
t
i
o
n
 
t
o
 
b
e
i
n
g
 
r
e
t
u
r
n
e
d
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
 
t
h
e
y
 
a
r
e
 
p
u
t
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
i
n
 
t
h
e
 
m
c
H
a
n
d
l
e
r
 
o
b
j
e
c
t
 
a
s
 
e
g
.
 
$
m
c
H
a
n
d
l
e
r
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
$
e
P
o
i
n
t
]
[
$
e
N
a
m
e
]

 
*
/

 
 
 
 
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
u
r
n
V
a
l
u
e
;

 
 
 
 
}

}

