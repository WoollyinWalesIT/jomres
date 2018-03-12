
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
9
9
9
0
w
i
d
g
e
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

	
	
	
r
e
t
u
r
n
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
j
o
m
r
e
s
_
w
i
d
g
e
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
j
o
m
r
e
s
_
w
i
d
g
e
t
s
'
)
;


	
	
/
/
r
e
g
i
s
t
e
r
 
c
o
r
e
 
w
i
d
g
e
t
s

	
	
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
=
 
5
0
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
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
!
=
 
'
1
'
 
&
&
 
!
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
i
s
_
j
i
n
t
o
u
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
'
)
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
w
i
d
g
e
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
_
w
i
d
g
e
t
(
'
0
6
0
0
1
'
,
 
'
d
a
s
h
b
o
a
r
d
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
T
I
M
E
L
I
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
T
I
M
E
L
I
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
,
 
t
r
u
e
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
w
i
d
g
e
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
_
w
i
d
g
e
t
(
'
0
6
0
0
1
'
,
 
'
w
e
e
k
l
y
_
o
c
c
u
p
a
n
c
y
_
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
s
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
O
V
E
R
A
L
L
_
R
O
O
M
S
_
B
O
O
K
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
O
V
E
R
A
L
L
_
R
O
O
M
S
_
B
O
O
K
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
,
 
t
r
u
e
)
;

	
	
	
}


	
	
	
$
j
o
m
r
e
s
_
w
i
d
g
e
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
_
w
i
d
g
e
t
(
'
0
6
0
0
1
'
,
 
'
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
R
P
O
R
T
A
L
_
C
P
A
N
E
L
_
L
I
S
T
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
R
P
O
R
T
A
L
_
C
P
A
N
E
L
_
L
I
S
T
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
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
!
=
 
'
1
'
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
w
i
d
g
e
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
_
w
i
d
g
e
t
(
'
0
6
0
0
1
'
,
 
'
l
i
s
t
_
b
o
o
k
i
n
g
s
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
L
I
S
T
B
O
O
K
I
N
G
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
L
I
S
T
B
O
O
K
I
N
G
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
j
o
m
r
e
s
_
w
i
d
g
e
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
_
w
i
d
g
e
t
(
'
0
6
0
0
1
'
,
 
'
l
i
s
t
_
g
u
e
s
t
s
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
H
L
I
S
T
_
G
U
E
S
T
S
_
M
E
N
U
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
G
U
E
S
T
S
_
M
E
N
U
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
j
o
m
r
e
s
_
w
i
d
g
e
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
_
w
i
d
g
e
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
l
i
s
t
_
i
n
v
o
i
c
e
s
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
H
L
I
S
T
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
M
E
N
U
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
I
N
V
O
I
C
E
S
_
M
E
N
U
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

	
	
	
}

	
	
}

	
	

	
	
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
=
 
7
0
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
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
!
=
 
'
1
'
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
w
i
d
g
e
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
_
w
i
d
g
e
t
(
'
0
6
0
0
2
'
,
 
'
c
h
a
r
t
_
b
o
o
k
i
n
g
s
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
H
A
R
T
_
B
O
O
K
I
N
G
S
_
D
E
S
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
C
H
A
R
T
_
B
O
O
K
I
N
G
S
_
D
E
S
C
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
 
n
u
l
l
;

 
 
 
 
}

}

