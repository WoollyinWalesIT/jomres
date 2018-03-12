
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
0
m
e
d
i
a
_
c
e
n
t
r
e

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
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
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
1
1
0
1
0
'
)
;

	
	
	
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
 
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
1
1
0
1
0
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
r
e
s
u
l
t
 
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
3
3
7
9
'
)
;

	
	
	
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
 
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
3
7
9
'
 
]
;

	
	
}


 
 
 
 
 
 
 
 
$
n
o
t
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

 
 
 
 
 
 
 
 
$
p
r
e
v
i
e
w
_
l
i
n
k
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
r
e
s
o
u
r
c
e
_
t
y
p
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
_
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
e
s
o
u
r
c
e
_
t
y
p
e
s
 
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
i
s
s
e
t
(
$
t
y
p
e
[
'
h
i
d
d
e
n
'
]
)
 
&
&
 
$
t
y
p
e
[
'
h
i
d
d
e
n
'
]
)
 
{

	
	
	
	
	
c
o
n
t
i
n
u
e
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
t
y
p
e
[
'
n
a
m
e
'
]
)
 
&
&
 
$
t
y
p
e
[
'
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
r
e
s
o
u
r
c
e
_
t
y
p
e
_
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
t
y
p
e
[
'
r
e
s
o
u
r
c
e
_
t
y
p
e
'
]
,
 
$
t
y
p
e
[
'
n
a
m
e
'
]
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
y
p
e
[
'
n
o
t
e
s
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
o
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
N
O
T
E
'
 
=
>
 
$
t
y
p
e
[
'
n
o
t
e
s
'
]
)
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
t
y
p
e
[
'
p
r
e
v
i
e
w
_
l
i
n
k
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
e
v
i
e
w
_
l
i
n
k
s
[
]
 
=
 
a
r
r
a
y
(
'
R
E
S
O
U
R
C
E
_
T
Y
P
E
'
 
=
>
 
$
t
y
p
e
[
'
r
e
s
o
u
r
c
e
_
t
y
p
e
'
]
 
,
 
'
P
R
E
V
I
E
W
_
L
I
N
K
'
 
=
>
 
$
t
y
p
e
[
'
p
r
e
v
i
e
w
_
l
i
n
k
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
j
a
v
a
s
c
r
i
p
t
 
=
 
'
o
n
c
h
a
n
g
e
=
"
g
e
t
_
r
e
s
o
u
r
c
e
_
i
d
s
_
f
o
r
_
r
e
s
o
u
r
c
e
_
t
y
p
e
(
t
h
i
s
.
v
a
l
u
e
)
;
"
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
R
E
S
O
U
R
C
E
_
T
Y
P
E
_
O
P
T
I
O
N
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
r
e
s
o
u
r
c
e
_
t
y
p
e
_
o
p
t
i
o
n
s
,
 
'
r
e
s
o
u
r
c
e
_
t
y
p
e
s
'
,
 
'
 
a
u
t
o
c
o
m
p
l
e
t
e
=
"
o
f
f
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
p
r
i
m
a
r
y
 
b
t
n
-
l
g
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
.
$
j
a
v
a
s
c
r
i
p
t
.
'
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
 
'
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
A
D
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
A
D
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
A
D
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
M
E
D
I
A
_
C
E
N
T
R
E
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
M
E
D
I
A
_
C
E
N
T
R
E
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
I
N
S
T
R
U
C
T
I
O
N
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
I
N
S
T
R
U
C
T
I
O
N
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
T
Y
P
E
S
_
I
N
S
T
R
U
C
T
I
O
N
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
C
L
E
A
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
M
E
D
I
A
_
C
E
N
T
R
E
_
C
L
E
A
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
M
E
D
I
A
_
C
E
N
T
R
E
_
C
L
E
A
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
D
R
A
G
N
D
R
O
P
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
M
E
D
I
A
_
C
E
N
T
R
E
_
D
R
A
G
N
D
R
O
P
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
M
E
D
I
A
_
C
E
N
T
R
E
_
D
R
A
G
N
D
R
O
P
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
D
E
L
E
T
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
D
E
L
E
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
D
E
L
E
T
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
V
I
E
W
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
V
I
E
W
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
V
I
E
W
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
U
P
L
O
A
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
U
P
L
O
A
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
U
P
L
O
A
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
U
P
L
O
A
D
_
A
L
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
U
P
L
O
A
D
_
A
L
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
M
E
D
I
A
_
C
E
N
T
R
E
_
B
U
T
T
O
N
_
U
P
L
O
A
D
_
A
L
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
U
P
L
O
A
D
_
F
O
R
M
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
U
P
L
O
A
D
_
I
M
A
G
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
U
P
L
O
A
D
_
I
M
A
G
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
R
E
V
I
E
W
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
R
E
V
I
E
W
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
R
E
V
I
E
W
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
S
P
E
C
I
F
I
C
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
S
P
E
C
I
F
I
C
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
S
P
E
C
I
F
I
C
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
G
E
N
E
R
I
C
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
G
E
N
E
R
I
C
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
G
E
N
E
R
I
C
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
P
R
E
V
I
E
W
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
P
R
E
V
I
E
W
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
P
R
E
V
I
E
W
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
L
I
M
I
T
A
T
I
O
N
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
L
I
M
I
T
A
T
I
O
N
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
L
I
M
I
T
A
T
I
O
N
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
I
M
A
G
E
_
R
E
S
O
L
U
T
I
O
N
_
P
R
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
I
M
A
G
E
_
R
E
S
O
L
U
T
I
O
N
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
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
I
M
A
G
E
_
R
E
S
O
L
U
T
I
O
N
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
I
M
A
G
E
_
R
E
S
O
L
U
T
I
O
N
_
P
O
S
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
I
M
A
G
E
_
R
E
S
O
L
U
T
I
O
N
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
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
I
M
A
G
E
_
R
E
S
O
L
U
T
I
O
N
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
F
I
L
E
S
I
Z
E
_
P
R
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
F
I
L
E
S
I
Z
E
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
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
F
I
L
E
S
I
Z
E
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
F
I
L
E
S
I
Z
E
_
P
O
S
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
F
I
L
E
S
I
Z
E
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
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
F
I
L
E
S
I
Z
E
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
A
_
U
P
L
O
A
D
S
_
F
I
L
E
S
I
Z
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
A
_
U
P
L
O
A
D
S
_
F
I
L
E
S
I
Z
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
A
_
U
P
L
O
A
D
S
_
F
I
L
E
S
I
Z
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
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
A
L
R
E
A
D
Y
_
U
P
L
O
A
D
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
A
L
R
E
A
D
Y
_
U
P
L
O
A
D
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
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
A
L
R
E
A
D
Y
_
U
P
L
O
A
D
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
M
A
X
_
W
I
D
T
H
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
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
m
a
x
w
i
d
t
h
'
 
]
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
L
L
O
W
E
D
_
F
I
L
E
_
T
Y
P
E
S
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
(
j
p
e
?
g
|
p
n
g
)
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
M
A
X
_
U
P
L
O
A
D
_
S
I
Z
E
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
t
h
i
s
-
>
f
i
l
e
s
i
z
e
_
f
o
r
m
a
t
t
e
d
(
$
t
h
i
s
-
>
f
i
l
e
_
u
p
l
o
a
d
_
m
a
x
_
s
i
z
e
(
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
W
I
D
T
H
_
P
I
X
E
L
S
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
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
m
a
x
w
i
d
t
h
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
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
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
)
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
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
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
o
u
t
p
u
t
[
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
R
P
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
R
P
'
,
 
f
a
l
s
e
)
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
[
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
M
R
P
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
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
M
R
P
'
,
 
f
a
l
s
e
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
D
E
F
A
U
L
T
_
P
R
E
V
I
E
W
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
s
h
o
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
_
h
e
a
d
e
r
&
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
;

 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
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
D
M
I
N
_
A
J
A
X
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
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


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
A
D
M
I
N
I
S
T
R
A
T
O
R
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
B
A
C
K
E
N
D
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
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
m
e
d
i
a
_
c
e
n
t
r
e
_
m
a
i
n
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
n
o
t
e
s
'
,
 
$
n
o
t
e
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
p
r
e
v
i
e
w
_
l
i
n
k
s
'
,
 
$
p
r
e
v
i
e
w
_
l
i
n
k
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

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
E
r
r
o
r
,
 
n
o
 
r
e
s
o
u
r
c
e
 
t
y
p
e
s
 
c
a
n
 
b
e
 
f
o
u
n
d
 
i
n
 
t
h
e
 
r
e
s
o
u
r
c
e
 
t
y
p
e
s
 
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
e
d
i
a
 
c
e
n
t
r
e
.
 
T
h
e
 
0
3
3
7
9
 
s
c
r
i
p
t
s
 
m
u
s
t
 
b
e
 
m
i
s
s
i
n
g
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 

 
 
 
 
/
/
 
R
e
t
u
r
n
s
 
a
 
f
i
l
e
 
s
i
z
e
 
l
i
m
i
t
 
i
n
 
b
y
t
e
s
 
b
a
s
e
d
 
o
n
 
t
h
e
 
P
H
P
 
u
p
l
o
a
d
_
m
a
x
_
f
i
l
e
s
i
z
e

 
 
 
 
/
/
 
a
n
d
 
p
o
s
t
_
m
a
x
_
s
i
z
e

 
 
 
 
f
u
n
c
t
i
o
n
 
f
i
l
e
_
u
p
l
o
a
d
_
m
a
x
_
s
i
z
e
(
)
 
{

 
 
 
 
 
 
s
t
a
t
i
c
 
$
m
a
x
_
s
i
z
e
 
=
 
-
1
;


 
 
 
 
 
 
 
 
i
f
 
(
$
m
a
x
_
s
i
z
e
 
<
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
S
t
a
r
t
 
w
i
t
h
 
p
o
s
t
_
m
a
x
_
s
i
z
e
.

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
x
_
s
i
z
e
 
=
 
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
_
s
i
z
e
(
i
n
i
_
g
e
t
(
'
p
o
s
t
_
m
a
x
_
s
i
z
e
'
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
I
f
 
u
p
l
o
a
d
_
m
a
x
_
s
i
z
e
 
i
s
 
l
e
s
s
,
 
t
h
e
n
 
r
e
d
u
c
e
.
 
E
x
c
e
p
t
 
i
f
 
u
p
l
o
a
d
_
m
a
x
_
s
i
z
e
 
i
s

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
z
e
r
o
,
 
w
h
i
c
h
 
i
n
d
i
c
a
t
e
s
 
n
o
 
l
i
m
i
t
.

 
 
 
 
 
 
 
 
 
 
 
 
$
u
p
l
o
a
d
_
m
a
x
 
=
 
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
_
s
i
z
e
(
i
n
i
_
g
e
t
(
'
u
p
l
o
a
d
_
m
a
x
_
f
i
l
e
s
i
z
e
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
p
l
o
a
d
_
m
a
x
 
>
 
0
 
&
&
 
$
u
p
l
o
a
d
_
m
a
x
 
<
 
$
m
a
x
_
s
i
z
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
x
_
s
i
z
e
 
=
 
$
u
p
l
o
a
d
_
m
a
x
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
m
a
x
_
s
i
z
e
;

 
 
 
 
}


 
 
 
 
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
s
i
z
e
(
$
s
i
z
e
)
 
{

 
 
 
 
 
 
 
 
$
u
n
i
t
 
=
 
p
r
e
g
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
/
[
^
b
k
m
g
t
p
e
z
y
]
/
i
'
,
 
'
'
,
 
$
s
i
z
e
)
;
 
/
/
 
R
e
m
o
v
e
 
t
h
e
 
n
o
n
-
u
n
i
t
 
c
h
a
r
a
c
t
e
r
s
 
f
r
o
m
 
t
h
e
 
s
i
z
e
.

 
 
 
 
 
 
 
 
$
s
i
z
e
 
=
 
p
r
e
g
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
/
[
^
0
-
9
\
.
]
/
'
,
 
'
'
,
 
$
s
i
z
e
)
;
 
/
/
 
R
e
m
o
v
e
 
t
h
e
 
n
o
n
-
n
u
m
e
r
i
c
 
c
h
a
r
a
c
t
e
r
s
 
f
r
o
m
 
t
h
e
 
s
i
z
e
.

 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
F
i
n
d
 
t
h
e
 
p
o
s
i
t
i
o
n
 
o
f
 
t
h
e
 
u
n
i
t
 
i
n
 
t
h
e
 
o
r
d
e
r
e
d
 
s
t
r
i
n
g
 
w
h
i
c
h
 
i
s
 
t
h
e
 
p
o
w
e
r
 
o
f
 
m
a
g
n
i
t
u
d
e
 
t
o
 
m
u
l
t
i
p
l
y
 
a
 
k
i
l
o
b
y
t
e
 
b
y
.

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
r
o
u
n
d
(
$
s
i
z
e
 
*
 
p
o
w
(
1
0
2
4
,
 
s
t
r
i
p
o
s
(
'
b
k
m
g
t
p
e
z
y
'
,
 
$
u
n
i
t
[
0
]
)
)
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
 
r
o
u
n
d
(
$
s
i
z
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 

 
 
 
/
*
*

 
*
 
F
o
r
m
a
t
s
 
f
i
l
e
s
i
z
e
 
i
n
 
h
u
m
a
n
 
r
e
a
d
a
b
l
e
 
w
a
y
.

 
*

 
*
 
@
p
a
r
a
m
 
f
i
l
e
 
$
f
i
l
e

 
*
 
@
r
e
t
u
r
n
 
s
t
r
i
n
g
 
F
o
r
m
a
t
t
e
d
 
F
i
l
e
s
i
z
e
,
 
e
.
g
.
 
"
1
1
3
.
2
4
 
M
B
"
.

 
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
 
f
i
l
e
s
i
z
e
_
f
o
r
m
a
t
t
e
d
(
$
b
y
t
e
s
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
b
y
t
e
s
 
>
=
 
1
0
7
3
7
4
1
8
2
4
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
m
b
e
r
_
f
o
r
m
a
t
(
$
b
y
t
e
s
 
/
 
1
0
7
3
7
4
1
8
2
4
,
 
2
)
 
.
 
'
 
G
B
'
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
b
y
t
e
s
 
>
=
 
1
0
4
8
5
7
6
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
m
b
e
r
_
f
o
r
m
a
t
(
$
b
y
t
e
s
 
/
 
1
0
4
8
5
7
6
,
 
2
)
 
.
 
'
 
M
B
'
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
b
y
t
e
s
 
>
=
 
1
0
2
4
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
m
b
e
r
_
f
o
r
m
a
t
(
$
b
y
t
e
s
 
/
 
1
0
2
4
,
 
2
)
 
.
 
'
 
K
B
'
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
b
y
t
e
s
 
>
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
b
y
t
e
s
 
.
 
'
 
b
y
t
e
s
'
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
b
y
t
e
s
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
1
 
b
y
t
e
'
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
 
'
0
 
b
y
t
e
s
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
 
n
u
l
l
;

 
 
 
 
}

}

