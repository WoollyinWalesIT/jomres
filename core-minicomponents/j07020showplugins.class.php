
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
7
0
2
0
s
h
o
w
p
l
u
g
i
n
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
r
e
m
o
t
e
_
p
l
u
g
i
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
r
e
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
 
=
 
f
a
l
s
e
;

	
	
$
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
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


 
 
 
 
 
 
 
 
i
f
 
(
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
_
A
B
S
P
A
T
H
.
'
r
e
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
s
t
_
m
o
d
i
f
i
e
d
 
=
 
f
i
l
e
m
t
i
m
e
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
_
A
B
S
P
A
T
H
.
'
r
e
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
c
o
n
d
s
_
t
i
m
e
d
i
f
f
 
=
 
t
i
m
e
(
)
 
-
 
$
l
a
s
t
_
m
o
d
i
f
i
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
c
o
n
d
s
_
t
i
m
e
d
i
f
f
 
>
 
3
6
0
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
l
i
n
k
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
_
A
B
S
P
A
T
H
.
'
r
e
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
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
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
 
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
_
A
B
S
P
A
T
H
.
'
r
e
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
_
A
B
S
P
A
T
H
.
'
r
e
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
)
)
 
{

	
	
	
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
 
=
 
'
'
;

	
	
	

	
	
	
$
b
a
s
e
_
u
r
i
 
=
 
'
h
t
t
p
:
/
/
p
l
u
g
i
n
s
.
j
o
m
r
e
s
4
.
n
e
t
/
'
;

	
	
	
$
q
u
e
r
y
_
s
t
r
i
n
g
 
=
 
'
i
n
d
e
x
.
p
h
p
?
r
=
d
p
&
f
o
r
m
a
t
=
j
s
o
n
&
c
m
s
=
'
.
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
.
'
&
j
o
m
r
e
s
v
e
r
=
'
.
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
v
e
r
s
i
o
n
'
]
;


	
	
	
t
r
y
 
{

	
	
	
	
$
c
l
i
e
n
t
 
=
 
n
e
w
 
G
u
z
z
l
e
H
t
t
p
\
C
l
i
e
n
t
(
[

	
	
	
	
	
'
b
a
s
e
_
u
r
i
'
 
=
>
 
$
b
a
s
e
_
u
r
i

	
	
	
	
]
)
;


	
	
	
	
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
'
S
t
a
r
t
i
n
g
 
g
u
z
z
l
e
 
c
a
l
l
 
t
o
 
'
.
$
b
a
s
e
_
u
r
i
.
$
q
u
e
r
y
_
s
t
r
i
n
g
,
 
'
G
u
z
z
l
e
'
,
 
'
D
E
B
U
G
'
)
;

	
	
	
	

	
	
	
	
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
 
=
 
$
c
l
i
e
n
t
-
>
r
e
q
u
e
s
t
(
'
G
E
T
'
,
 
$
q
u
e
r
y
_
s
t
r
i
n
g
)
-
>
g
e
t
B
o
d
y
(
)
-
>
g
e
t
C
o
n
t
e
n
t
s
(
)
;

	
	
	
}

	
	
	
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
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
u
s
e
r
_
f
e
e
d
b
a
c
k
 
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
u
s
e
r
_
f
e
e
d
b
a
c
k
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
u
s
e
r
_
f
e
e
d
b
a
c
k
-
>
c
o
n
s
t
r
u
c
t
_
m
e
s
s
a
g
e
(
a
r
r
a
y
(
'
m
e
s
s
a
g
e
'
=
>
'
C
o
u
l
d
 
n
o
t
 
g
e
t
 
p
l
u
g
i
n
s
 
d
a
t
a
'
,
 
'
c
s
s
_
c
l
a
s
s
'
=
>
'
a
l
e
r
t
-
d
a
n
g
e
r
 
a
l
e
r
t
-
e
r
r
o
r
'
)
)
;

	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
U
n
c
o
m
m
e
n
t
 
t
h
i
s
 
t
o
 
s
h
o
w
 
a
l
l
 
u
p
d
a
t
e
s
,
 
i
n
c
l
u
d
i
n
g
 
b
e
t
a
 
p
l
u
g
i
n
s
.

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
 
=
 
q
u
e
r
y
U
p
d
a
t
e
S
e
r
v
e
r
(
 
"
"
,
 
"
r
=
d
p
&
f
o
r
m
a
t
=
j
s
o
n
&
c
m
s
=
"
 
.
 
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
 
 
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
 
!
=
 
'
'
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
_
A
B
S
P
A
T
H
.
'
r
e
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
,
 
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
 
=
 
j
s
o
n
_
d
e
c
o
d
e
(
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
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
m
o
t
e
_
p
l
u
g
i
n
s
)
)
 
{

	
	
	

	
	
	
i
f
 
(
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
_
A
B
S
P
A
T
H
.
'
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
)
)
 
{

	
	
	
	
$
l
a
s
t
_
m
o
d
i
f
i
e
d
 
=
 
f
i
l
e
m
t
i
m
e
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
_
A
B
S
P
A
T
H
.
'
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
)
;

	
	
	
	
$
s
e
c
o
n
d
s
_
t
i
m
e
d
i
f
f
 
=
 
t
i
m
e
(
)
 
-
 
$
l
a
s
t
_
m
o
d
i
f
i
e
d
;

	
	
	
	
i
f
 
(
$
s
e
c
o
n
d
s
_
t
i
m
e
d
i
f
f
 
>
 
3
6
0
0
)
 
{

	
	
	
	
	
u
n
l
i
n
k
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
_
A
B
S
P
A
T
H
.
'
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
 
=
 
j
s
o
n
_
d
e
c
o
d
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
_
A
B
S
P
A
T
H
.
'
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
)
)
;

	
	
	
	
}

	
	
	
}


	
	
	
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
_
A
B
S
P
A
T
H
.
'
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
)
)
 
{

	
	
	
	
$
j
r
c
P
a
t
h
 
=
 
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
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
f
i
l
e
s
 
=
 
s
c
a
n
d
i
r
_
g
e
t
f
i
l
e
s
(
$
j
r
c
P
a
t
h
)
;

	
	
	
	
$
d
 
=
 
@
d
i
r
(
$
j
r
c
P
a
t
h
)
;

	
	
	
	
i
f
 
(
$
d
)
 
{

	
	
	
	
	
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
e
n
t
r
y
 
=
 
$
d
-
>
r
e
a
d
(
)
)
)
 
{

	
	
	
	
	
	
$
f
i
l
e
n
a
m
e
 
=
 
$
e
n
t
r
y
;


	
	
	
	
	
	
i
f
 
(
s
u
b
s
t
r
(
$
e
n
t
r
y
,
 
0
,
 
1
)
 
!
=
 
'
.
'
)
 
{

	
	
	
	
	
	
	
i
f
 
(
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
j
r
c
P
a
t
h
.
$
e
n
t
r
y
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
f
o
.
p
h
p
'
)
)
 
{

	
	
	
	
	
	
	
	
i
n
c
l
u
d
e
_
o
n
c
e
 
$
j
r
c
P
a
t
h
.
$
e
n
t
r
y
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
f
o
.
p
h
p
'
;

	
	
	
	
	
	
	
	
$
c
n
a
m
e
 
=
 
'
p
l
u
g
i
n
_
i
n
f
o
_
'
.
$
e
n
t
r
y
;

	
	
	
	
	
	
	
	
i
f
 
(
c
l
a
s
s
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
n
a
m
e
)
)
 
{

	
	
	
	
	
	
	
	
	
$
i
n
f
o
 
=
 
n
e
w
 
$
c
n
a
m
e
(
)
;

	
	
	
	
	
	
	
	
	
$
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
[
 
$
i
n
f
o
-
>
d
a
t
a
[
 
'
n
a
m
e
'
 
]
 
]
 
=
 
$
i
n
f
o
-
>
d
a
t
a
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
}


	
	
	
	
	
$
t
m
p
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
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
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
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
r
e
m
o
t
e
_
p
l
u
g
i
n
s
-
>
$
k
e
y
)
)
 
{

	
	
	
	
	
	
	
$
t
m
p
-
>
$
k
e
y
 
=
 
(
o
b
j
e
c
t
)
$
v
a
l
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
	
$
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
 
=
 
$
t
m
p
;

	
	
	
	
	

	
	
	
	
	
i
f
 
(
$
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
 
!
=
 
'
'
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
_
A
B
S
P
A
T
H
.
'
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
,
 
j
s
o
n
_
e
n
c
o
d
e
(
$
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
)
)
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
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
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
 
=
 
0
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
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
 
a
s
 
$
i
p
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
n
a
m
e
 
=
 
$
i
p
-
>
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
c
a
l
_
v
e
r
s
i
o
n
 
=
 
$
i
p
-
>
v
e
r
s
i
o
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
m
o
t
e
_
v
e
r
s
i
o
n
 
=
 
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
-
>
$
p
l
u
g
i
n
n
a
m
e
-
>
v
e
r
s
i
o
n
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
m
o
t
e
_
v
e
r
s
i
o
n
 
>
 
$
l
o
c
a
l
_
v
e
r
s
i
o
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
+
+
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
u
n
t
 
>
 
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
r
e
t
V
a
l
s
 
=
 
a
r
r
a
y
(
'
r
e
d
'
 
=
>
 
$
c
o
u
n
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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

