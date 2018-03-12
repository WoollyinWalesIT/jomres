
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


f
u
n
c
t
i
o
n
 
j
r
_
d
e
f
i
n
e
(
$
c
o
n
s
t
a
n
t
,
 
$
s
t
r
i
n
g
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
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
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
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
s
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
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
s
-
>
d
e
f
i
n
e
(
$
c
o
n
s
t
a
n
t
,
 
$
s
t
r
i
n
g
)
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
 
j
r
_
g
e
t
_
d
e
f
i
n
e
d
(
$
c
o
n
s
t
a
n
t
,
 
$
d
e
f
a
u
l
t
 
=
 
'
'
)

{

 
 
 
 
i
f
 
(
!
d
e
f
i
n
e
d
(
$
c
o
n
s
t
a
n
t
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
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
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
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
s
'
)
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
$
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
s
-
>
g
e
t
_
d
e
f
i
n
e
d
(
$
c
o
n
s
t
a
n
t
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
 
=
=
=
 
f
a
l
s
e
 
&
&
 
$
d
e
f
a
u
l
t
 
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
u
l
t
 
=
 
$
d
e
f
a
u
l
t
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
 
c
o
n
s
t
a
n
t
(
$
c
o
n
s
t
a
n
t
)
;

 
 
 
 
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
$
t
h
e
C
o
n
s
t
a
n
t
,
 
$
t
h
e
V
a
l
u
e
,
 
$
o
k
T
o
E
d
i
t
 
=
 
t
r
u
e
,
 
$
i
s
L
i
n
k
 
=
 
f
a
l
s
e
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

	

	
$
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
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
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
s
'
)
;

	

	
$
e
d
i
t
i
n
g
 
=
 
f
a
l
s
e
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
 
(
i
n
t
)
 
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

 
 
 
 
}
 
e
l
s
e
 
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
 
0
;

 
 
 
 
}


 
 
 
 
$
c
u
s
t
o
m
T
e
x
t
O
b
j
 
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
c
u
s
t
o
m
_
t
e
x
t
'
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


 
 
 
 
/
/
 
I
f
 
j
r
_
u
s
e
r
 
i
s
n
'
t
 
r
e
a
d
y
 
y
e
t
,
 
c
a
l
l
i
n
g
 
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
 
w
i
l
l
 
c
a
u
s
e
 
p
h
p
 
t
o
 
s
t
o
p
 
d
u
e
 
t
o
 
r
e
c
u
r
s
i
o
n
,
 
s
o
 
w
e
'
l
l
 
c
h
e
c
k
 
t
h
a
t
 
j
r
_
u
s
e
r
'
s
 
b
e
e
n
 
s
e
t
 
u
p
 
b
e
f
o
r
e
 
w
e
 
d
o
 
a
n
y
t
h
i
n
g
 
e
l
s
e

 
 
 
 
i
f
 
(
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
r
_
u
s
e
r
_
r
e
a
d
y
'
)
)
 
{

 
 
 
 
 
 
 
 
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
u
s
e
r
_
s
e
t
t
i
n
g
s
[
 
'
e
d
i
t
i
n
g
_
o
n
'
 
]
)
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
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s
[
 
'
e
d
i
t
i
n
g
_
o
n
'
 
]
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
u
s
e
r
_
s
e
t
t
i
n
g
s
[
 
'
e
d
i
t
i
n
g
_
o
n
'
 
]
 
=
 
f
a
l
s
e
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
 
<
 
7
0
)
 
{
 
/
/
l
o
w
e
r
 
t
h
a
n
 
m
a
n
a
g
e
r

 
 
 
 
 
 
 
 
 
 
 
 
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
u
s
e
r
_
s
e
t
t
i
n
g
s
[
 
'
e
d
i
t
i
n
g
_
o
n
'
 
]
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
e
d
i
t
i
n
g
 
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
u
s
e
r
_
s
e
t
t
i
n
g
s
[
 
'
e
d
i
t
i
n
g
_
o
n
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
u
s
e
r
_
s
e
t
t
i
n
g
s
[
 
'
e
d
i
t
i
n
g
_
o
n
'
 
]
 
=
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
$
b
r
 
=
 
'
'
;

 
 
 
 
i
f
 
(
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
t
a
s
k
'
)
 
=
=
 
'
e
d
i
t
C
u
s
t
o
m
T
e
x
t
A
l
l
'
)
 
{

 
 
 
 
 
 
 
 
$
b
r
 
=
 
'
<
b
r
 
/
>
'
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
u
s
t
o
m
T
e
x
t
O
b
j
-
>
g
l
o
b
a
l
_
c
u
s
t
o
m
_
t
e
x
t
[
$
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
s
-
>
p
t
y
p
e
]
[
$
t
h
e
C
o
n
s
t
a
n
t
]
)
)
 
{

 
 
 
 
 
 
 
 
$
t
h
e
T
e
x
t
 
=
 
$
c
u
s
t
o
m
T
e
x
t
O
b
j
-
>
g
l
o
b
a
l
_
c
u
s
t
o
m
_
t
e
x
t
[
$
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
s
-
>
p
t
y
p
e
]
[
$
t
h
e
C
o
n
s
t
a
n
t
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
c
u
s
t
o
m
T
e
x
t
O
b
j
-
>
g
l
o
b
a
l
_
c
u
s
t
o
m
_
t
e
x
t
[
'
0
'
]
[
$
t
h
e
C
o
n
s
t
a
n
t
]
)
)
 
{

	
	
$
t
h
e
T
e
x
t
 
=
 
$
c
u
s
t
o
m
T
e
x
t
O
b
j
-
>
g
l
o
b
a
l
_
c
u
s
t
o
m
_
t
e
x
t
[
'
0
'
]
[
$
t
h
e
C
o
n
s
t
a
n
t
]
;

	
}
 
e
l
s
e
 
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
c
u
s
t
o
m
T
e
x
t
O
b
j
-
>
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
c
u
s
t
o
m
_
t
e
x
t
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

	
	
	
$
c
u
s
t
o
m
T
e
x
t
O
b
j
-
>
g
e
t
_
c
u
s
t
o
m
_
t
e
x
t
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
u
s
t
o
m
T
e
x
t
O
b
j
-
>
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
c
u
s
t
o
m
_
t
e
x
t
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
$
t
h
e
C
o
n
s
t
a
n
t
]
)
)
 
{

	
	
	
$
t
h
e
T
e
x
t
 
=
 
$
c
u
s
t
o
m
T
e
x
t
O
b
j
-
>
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
c
u
s
t
o
m
_
t
e
x
t
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
$
t
h
e
C
o
n
s
t
a
n
t
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
h
e
T
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
_
d
e
f
i
n
e
d
(
$
t
h
e
C
o
n
s
t
a
n
t
,
 
$
t
h
e
V
a
l
u
e
)
;

	
	
}

	
}

	

	
$
t
h
e
T
e
x
t
 
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
t
h
e
T
e
x
t
)
;


 
 
 
 
i
f
 
(
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
r
_
u
s
e
r
_
r
e
a
d
y
'
)
 
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
M
a
n
a
g
e
r
)
 
{

	
	
$
t
a
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
t
a
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
t
a
s
k
 
!
=
 
'
'
 
&
&
 
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

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
$
t
a
s
k
 
=
=
 
'
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
s
'
 
|
|
 
$
t
a
s
k
 
=
=
 
'
t
r
a
n
s
l
a
t
e
_
l
o
c
a
l
e
s
'
 
|
|
 
$
t
a
s
k
 
=
=
 
'
t
r
a
n
s
l
a
t
e
_
l
a
n
g
_
f
i
l
e
_
s
t
r
i
n
g
s
'
)
 
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
M
a
n
a
g
e
r
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
 
0
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
[
 
'
e
d
i
t
i
n
g
M
o
d
e
A
f
f
e
c
t
s
A
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
'
 
]
 
=
 
'
1
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
d
i
t
i
n
g
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
D
i
s
a
b
l
e
d
 
i
n
 
9
.
8
.
1
9
.
 
T
h
i
s
 
v
e
r
s
i
o
n
 
i
n
t
r
o
d
u
c
e
s
 
M
a
r
k
d
o
w
n
 
f
o
r
 
n
o
n
-
s
u
p
e
r
-
m
a
n
a
g
e
r
s
.
 
A
s
 
a
 
r
e
s
u
l
t
 
w
e
 
w
a
n
t
 
s
u
p
e
r
 
m
a
n
a
g
e
r
s
 
t
o
 
c
o
n
t
i
n
u
e
 
u
s
i
n
g
 
H
T
M
L
 
i
f
 
t
h
e
y
 
w
a
n
t
.

 
 
 
 
 
 
 
 
/
/
 
T
h
i
s
 
s
w
i
t
c
h
 
m
a
k
e
s
 
t
h
i
n
g
s
 
c
o
n
f
u
s
i
n
g
,
 
a
s
 
d
i
s
a
b
l
i
n
g
 
t
h
e
 
h
t
m
l
 
e
d
i
t
o
r
s
 
w
i
l
l
 
p
r
e
v
e
n
t
 
h
t
m
l
 
i
n
 
l
a
n
g
u
a
g
e
 
f
i
l
e
s
 
f
r
o
m
 
b
e
i
n
g
 
u
s
e
d
.

 
 
 
 
 
 
 
 
/
*
 
i
f
 
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
a
l
l
o
w
H
T
M
L
e
d
i
t
o
r
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
t
h
e
T
e
x
t
 
=
 
j
o
m
r
e
s
_
r
e
m
o
v
e
_
H
T
M
L
(
$
t
h
e
T
e
x
t
)
;

 
 
 
 
 
 
 
 
}
 
*
/


 
 
 
 
 
 
 
 
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
 
(
$
e
d
i
t
i
n
g
 
|
|
 
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
e
d
i
t
i
n
g
M
o
d
e
A
f
f
e
c
t
s
A
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
'
 
]
 
=
=
 
'
1
'
 
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
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
)
)
 
&
&
 
$
o
k
T
o
E
d
i
t
 
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

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
l
e
n
(
t
r
i
m
(
$
t
h
e
T
e
x
t
)
)
 
=
=
 
0
 
|
|
 
s
t
r
t
o
l
o
w
e
r
(
t
r
i
m
(
$
t
h
e
T
e
x
t
)
)
 
=
=
 
'
<
s
p
a
n
>
<
/
s
p
a
n
>
'
 
|
|
 
s
t
r
t
o
l
o
w
e
r
(
t
r
i
m
(
$
t
h
e
T
e
x
t
)
)
 
=
=
 
'
<
s
p
a
n
>
 
<
/
s
p
a
n
>
'
 
|
|
 
s
t
r
t
o
l
o
w
e
r
(
t
r
i
m
(
$
t
h
e
T
e
x
t
)
)
 
=
=
 
'
<
s
p
a
n
>
 
 
<
/
s
p
a
n
>
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
e
T
e
x
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
d
e
x
p
h
p
 
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
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
i
t
l
e
 
=
 
'
 
t
i
t
l
e
=
"
'
.
j
r
_
g
e
t
_
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
R
O
O
M
_
L
I
N
K
T
E
X
T
'
,
 
'
E
d
i
t
 
i
t
e
m
'
)
.
'
"
 
'
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
s
L
i
n
k
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
d
o
 
n
o
t
h
i
n
g

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
e
d
i
t
i
n
g
 
&
&
 
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
R
E
Q
U
E
S
T
,
 
'
n
o
_
h
t
m
l
'
,
 
0
)
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
i
n
p
l
a
c
e
&
l
a
n
g
=
'
.
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
l
a
n
g
'
)
.
'
&
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
=
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
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
s
-
>
p
t
y
p
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
e
d
i
t
i
n
p
l
a
c
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
e
T
e
x
t
 
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
#
"
 
i
d
=
"
'
.
$
t
h
e
C
o
n
s
t
a
n
t
.
'
"
 
d
a
t
a
-
t
y
p
e
=
"
t
e
x
t
"
 
d
a
t
a
-
p
k
=
"
'
.
$
t
h
e
C
o
n
s
t
a
n
t
.
'
"
 
d
a
t
a
-
u
r
l
=
"
'
.
$
u
r
l
.
'
"
 
d
a
t
a
-
o
r
i
g
i
n
a
l
-
t
i
t
l
e
=
"
'
.
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
$
t
h
e
T
e
x
t
)
.
'
"
>
'
.
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
$
t
h
e
T
e
x
t
)
.
'
<
/
a
>

	
	
	
	
	
<
s
c
r
i
p
t
>
j
Q
u
e
r
y
(
d
o
c
u
m
e
n
t
)
.
r
e
a
d
y
(
f
u
n
c
t
i
o
n
 
(
)
 
{
j
o
m
r
e
s
J
q
u
e
r
y
(
\
'
#
'
 
.
$
t
h
e
C
o
n
s
t
a
n
t
.
'
\
'
)
.
e
d
i
t
a
b
l
e
(
)
;
}
)
;
<
/
s
c
r
i
p
t
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
d
o
 
n
o
t
h
i
n
g

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
$
t
h
e
T
e
x
t
;

}

